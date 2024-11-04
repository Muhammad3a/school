<?php

namespace App\Providers\Filament;

use App\Models\pai;
use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use App\Models\Priode;
use App\Models\Sejarah;
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
use App\Filament\Resources\BdResource;
use App\Filament\Resources\KbResource;
use App\Filament\Resources\PpResource;
use App\Filament\Resources\SbResource;
use App\Filament\Resources\Dk3Resource;
use App\Filament\Resources\MtkResource;
use App\Filament\Resources\PaiResource;
use App\Filament\Resources\PboResource;
use App\Filament\Resources\PkkResource;
use App\Filament\Resources\PpbResource;
use App\Filament\Resources\PplResource;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\BingResource;
use App\Filament\Resources\PjokResource;
use App\Filament\Resources\PwebResource;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\BandkResource;
use App\Filament\Resources\BarabResource;
use App\Filament\Resources\BindoResource;
use App\Filament\Resources\FandkResource;
use App\Filament\Resources\KimiaResource;
use App\Filament\Resources\NilaiResource;
use App\Filament\Resources\PbtgmResource;
use App\Filament\Resources\BsundaResource;
use App\Filament\Resources\DwaktuResource;
use App\Filament\Resources\FisikaResource;
use App\Filament\Resources\JengkeResource;
use App\Filament\Resources\PemturResource;
use App\Filament\Resources\PriodeResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\DibadahResource;
use App\Filament\Resources\SejarahResource;
use App\Filament\Resources\StudentResource;
use App\Filament\Resources\SubjectResource;
use App\Filament\Resources\TeacherResource;
use App\Filament\Resources\DbelajarResource;
use App\Filament\Resources\DbergaulResource;
use App\Filament\Resources\SemesterResource;
use App\Filament\Resources\ClassroomResource;
use App\Filament\Resources\DkeamananResource;
use App\Filament\Resources\PberbaktiResource;
use App\Filament\Resources\CpSemesterResource;
use App\Filament\Resources\DberbahasaResource;
use App\Filament\Resources\DberbusanaResource;
use App\Filament\Resources\DbertindakResource;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\DepartementResource;
use App\Filament\Resources\InformatikaResource;
use App\Filament\Resources\PmemeliharaResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Resources\CategoryNilaiResource;
use App\Filament\Resources\PbusanamuslimResource;
use App\Filament\Resources\CatatanAkademikResource;
use App\Filament\Resources\PinfaqsejakdiniResource;
use App\Filament\Resources\PmembacaalquranResource;
use App\Filament\Resources\PmemeliharaadabResource;
use App\Filament\Resources\StudentHasClassResource;
use App\Filament\Resources\PtalimdanceramahResource;
use App\Filament\Resources\PelajaranKejuruanResource;
use App\Filament\Resources\PmelaksanakansaumResource;
use App\Filament\Resources\PmendirikansholatResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use App\Filament\Resources\PmencintaitanahairResource;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use App\Filament\Resources\DmenggunakanfasilitasResource;
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
                // 'danger' => Color::Rose,
                // 'gray' => Color::Gray,
                // 'info' => Color::Blue,
                // 'primary' => Color::Indigo,
                // 'success' => Color::Emerald,
                // 'warning' => Color::Orange,
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
            // ->viteTheme('resources/css/filament/admin/theme.css')
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
                    NavigationGroup::make('Data User')
                        ->items([
                            ...TeacherResource::getNavigationItems(),
                            ...StudentResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Data Umum')
                        ->items([
                            ...ClassroomResource::getNavigationItems(),
                            ...StudentHasClassResource::getNavigationItems(),
                            ...PriodeResource::getNavigationItems(),
                            ...SemesterResource::getNavigationItems(),
                            ...JengkeResource::getNavigationItems(),

                        ]),
                    NavigationGroup::make('Data Pelajaran')
                        ->items([
                            ...SubjectResource::getNavigationItems(),
                            ...PelajaranKejuruanResource::getNavigationItems(),
                            ...CpSemesterResource::getNavigationItems(),
                            ...CatatanAkademikResource::getNavigationItems(),

                        ]),

                    NavigationGroup::make('Ledger Mapel Umum & Mulok')
                        ->items([
                            ...PaiResource::getNavigationItems(),
                            ...PpResource::getNavigationItems(),
                            ...BindoResource::getNavigationItems(),
                            ...PjokResource::getNavigationItems(),
                            ...SejarahResource::getNavigationItems(),
                            ...SbResource::getNavigationItems(),
                            ...BsundaResource::getNavigationItems(),
                            ...BarabResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Ledger B Kejuruan Umum & DK')
                        ->items([
                            ...MtkResource::getNavigationItems(),
                            ...BingResource::getNavigationItems(),
                            ...InformatikaResource::getNavigationItems(),
                            ...FisikaResource::getNavigationItems(),
                            ...KimiaResource::getNavigationItems(),
                            ...BandkResource::getNavigationItems(),
                            ...FandkResource::getNavigationItems(),
                            ...PemturResource::getNavigationItems(),
                            ...PboResource::getNavigationItems(),
                            ...PplResource::getNavigationItems(),
                        ]),

                    NavigationGroup::make('Ledger B Kejuruan KK & Pilih')
                        ->items([
                            ...BdResource::getNavigationItems(),
                            ...PbtgmResource::getNavigationItems(),
                            ...PwebResource::getNavigationItems(),
                            ...PpbResource::getNavigationItems(),
                            ...PkkResource::getNavigationItems(),
                            ...KbResource::getNavigationItems(),

                        ]),

                    NavigationGroup::make('10 Disiplin')
                        ->items([
                            ...DwaktuResource::getNavigationItems(),
                            ...DibadahResource::getNavigationItems(),
                            ...DbelajarResource::getNavigationItems(),
                            ...DbergaulResource::getNavigationItems(),
                            ...DberbusanaResource::getNavigationItems(),
                            ...DmenggunakanfasilitasResource::getNavigationItems(),
                            ...Dk3Resource::getNavigationItems(),
                            ...DberbahasaResource::getNavigationItems(),
                            ...DbertindakResource::getNavigationItems(),
                            ...DkeamananResource::getNavigationItems(),


                        ]),
                        
                        NavigationGroup::make('10 Pembiasaan')
                        ->items([

                            ...PberbaktiResource::getNavigationItems(),
                            ...PbusanamuslimResource::getNavigationItems(),
                            ...PmemeliharaadabResource::getNavigationItems(),
                            ...PmembacaalquranResource::getNavigationItems(),
                            ...PmemeliharaResource::getNavigationItems(),
                            ...PmendirikansholatResource::getNavigationItems(),
                            ...PtalimdanceramahResource::getNavigationItems(),
                            ...PinfaqsejakdiniResource::getNavigationItems(),
                            ...PmelaksanakansaumResource::getNavigationItems(),
                            ...PmencintaitanahairResource::getNavigationItems(),
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
