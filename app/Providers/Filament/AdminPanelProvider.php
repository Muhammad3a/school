<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use App\Models\Priode;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Semester;
use App\Models\Classroom;
use App\Models\CpSemester;
use App\Models\Departement;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use App\Models\CatatanAkademik;
use App\Models\PelajaranKejuruan;
use Filament\Support\Colors\Color;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\NilaiResource;
use App\Filament\Resources\PriodeResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\StudentResource;
use App\Filament\Resources\SubjectResource;
use App\Filament\Resources\TeacherResource;
use App\Filament\Resources\SemesterResource;
use App\Filament\Resources\ClassroomResource;
use App\Filament\Resources\CpSemesterResource;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\DepartementResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Resources\CategoryNilaiResource;
use App\Filament\Resources\CatatanAkademikResource;
use App\Filament\Resources\StudentHasClassResource;
use App\Filament\Resources\PelajaranKejuruanResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Resources\StudentResource\Widgets\StatsOverview;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->sidebarCollapsibleOnDesktop(true)
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->plugin(FilamentSpatieRolesPermissionsPlugin::make())
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->groups([

                    NavigationGroup::make('')
                        ->items([
                            NavigationItem::make('Dashboard')
                                ->icon('heroicon-o-home')
                                ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard'))
                                ->url(fn(): string => Dashboard::getUrl()),

                        ]),
                    NavigationGroup::make('Data Guru')
                        ->items([
                            ...TeacherResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Data Umum')
                        ->items([
                            // ...StudentResource::getNavigationItems(),
                            ...ClassroomResource::getNavigationItems(),
                            ...StudentHasClassResource::getNavigationItems(),
                            // ...SubjectResource::getNavigationItems(),
                            ...PriodeResource::getNavigationItems(),
                            ...SemesterResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Data Pelajaran')
                        ->items([
                            // ...StudentResource::getNavigationItems(),
                            // ...ClassroomResource::getNavigationItems(),
                            // ...StudentHasClassResource::getNavigationItems(),
                            ...SubjectResource::getNavigationItems(),
                            ...PelajaranKejuruanResource::getNavigationItems(),
                            ...CpSemesterResource::getNavigationItems(),
                            ...CatatanAkademikResource::getNavigationItems(),
                            // ...PriodeResource::getNavigationItems(),
                            // ...SemesterResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Data Nilai Pelajaran')
                        ->items([
                            ...CategoryNilaiResource::getNavigationItems(),
                            ...DepartementResource::getNavigationItems(),
                            ...NilaiResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Setting')
                        ->items([
                            NavigationItem::make('Role')
                                ->icon('heroicon-o-adjustments-horizontal')
                                ->isActiveWhen(fn(): bool => request()->routeIs([
                                    'filament.admin.resources.roles.index',
                                    'filament.admin.resources.roles.create',
                                    'filament.admin.resources.roles.view',
                                    'filament.admin.resources.roles.edit',
                                ]))
                                ->url(fn(): string => '/admin/roles'),
                            NavigationItem::make('Permissions')
                                ->icon('heroicon-o-lock-closed')
                                ->isActiveWhen(fn(): bool => request()->routeIs([
                                    'filament.admin.resources.permissions.index',
                                    'filament.admin.resources.permissions.crate',
                                    'filament.admin.resources.permissions.view',
                                    'filament.admin.resources.permissions.edit',
                                ]))
                                ->url(fn(): string => '/admin/permissions'),

                            ...UserResource::getNavigationItems()
                        ])

                ]);
            });
    }

    public static function boot(): void
    {
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                UserMenuItem::make()
                    ->label('Settings')
                    ->url(PriodeResource::getUrl())
                    ->icon('heroicon-s-cog')
            ]);
        });
    }
}
