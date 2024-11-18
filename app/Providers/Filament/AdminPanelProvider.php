<?php

namespace App\Providers\Filament;

use App\Models\pai;
use App\Models\Pkl;
use Filament\Pages;
use Filament\Panel;
use App\Models\Alfa;
use App\Models\Izin;
use App\Models\dsmt1;
use App\Models\Sakit;
use Filament\Widgets;
use App\Models\Priode;
use App\Models\KAmulia;
use App\Models\Sejarah;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Semester;
use App\Models\Classroom;
use App\Models\Kindustri;
use App\Models\Berekayasa;
use App\Models\CpSemester;
use App\Models\Departement;
use App\Models\Kewirausaha;
use Filament\PanelProvider;
use App\Models\Keberkerjaan;
use Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use App\Models\CatatanAkademik;
use Filament\Resources\Resource;
use App\Models\PelajaranKejuruan;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
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
use App\Filament\Resources\PklResource;
use App\Filament\Resources\PpbResource;
use App\Filament\Resources\PplResource;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\AlfaResource;
use App\Filament\Resources\BingResource;
use App\Filament\Resources\IzinResource;
use App\Filament\Resources\PjokResource;
use App\Filament\Resources\PwebResource;
use App\Filament\Resources\Smt1Resource;
use App\Filament\Resources\Smt2Resource;
use App\Filament\Resources\Smt3Resource;
use App\Filament\Resources\Smt4Resource;
use App\Filament\Resources\Smt5Resource;
use App\Filament\Resources\Smt6Resource;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\BandkResource;
use App\Filament\Resources\BarabResource;
use App\Filament\Resources\BindoResource;
use App\Filament\Resources\Dsmt1Resource;
use App\Filament\Resources\Dsmt2Resource;
use App\Filament\Resources\Dsmt3Resource;
use App\Filament\Resources\Dsmt4Resource;
use App\Filament\Resources\Dsmt5Resource;
use App\Filament\Resources\Dsmt6Resource;

use App\Filament\Resources\Esmt1Resource;

use App\Filament\Resources\Esmt2Resource;
use App\Filament\Resources\Esmt3Resource;

use App\Filament\Resources\Esmt4Resource;
use App\Filament\Resources\Esmt5Resource;
use App\Filament\Resources\Esmt6Resource;
use App\Filament\Resources\FandkResource;

use App\Filament\Resources\KimiaResource;
use App\Filament\Resources\Ksmt1Resource;
// use App\Filament\Resources\SemesterResource;
// use App\Filament\Resources\ClassroomResource;
use App\Filament\Resources\Ksmt2Resource;
use App\Filament\Resources\Ksmt3Resource;
// use App\Filament\Resources\CpSemesterResource;
use App\Filament\Resources\Ksmt4Resource;
use App\Filament\Resources\Ksmt5Resource;
use App\Filament\Resources\Ksmt6Resource;
// use Filament\Widgets\StatsOverviewWidget\Stat;
// use App\Filament\Resources\DepartementResource;
// use App\Filament\Resources\InformatikaResource;
use App\Filament\Resources\NilaiResource;

use App\Filament\Resources\PbtgmResource;
use App\Filament\Resources\Psmt1Resource;
use App\Filament\Resources\Psmt2Resource;
use App\Filament\Resources\Psmt3Resource;
use App\Filament\Resources\Psmt4Resource;
use App\Filament\Resources\Psmt5Resource;
use App\Filament\Resources\Psmt6Resource;
use App\Filament\Resources\SakitResource;
use App\Filament\Resources\Usmt1Resource;
use App\Filament\Resources\Usmt2Resource;
use App\Filament\Resources\Usmt3Resource;
use App\Filament\Resources\Usmt4Resource;

use App\Filament\Resources\Usmt5Resource;
use App\Filament\Resources\Usmt6Resource;
use App\Filament\Resources\BkerjaResource;
use App\Filament\Resources\BsundaResource;
use App\Filament\Resources\DwaktuResource;
use App\Filament\Resources\FisikaResource;
use App\Filament\Resources\JengkeResource;
use App\Filament\Resources\PemturResource;
use App\Filament\Resources\PriodeResource;
use App\Filament\Resources\UjiKomResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
<<<<<<< HEAD
use App\Filament\Resources\DibadahResource;
=======

use App\Filament\Resources\DibadahResource;

>>>>>>> 499be73fec3b3025ae93dfd1c227f31b9f086b32
use App\Filament\Resources\KAmuliaResource;
use App\Filament\Resources\PramukaResource;

use App\Filament\Resources\SejarahResource;
use App\Filament\Resources\StudentResource;
use App\Filament\Resources\SubjectResource;
use App\Filament\Resources\TeacherResource;
<<<<<<< HEAD
use App\Filament\Resources\DbelajarResource;
use App\Filament\Resources\DbergaulResource;
=======

use App\Filament\Resources\DbelajarResource;
use App\Filament\Resources\DbergaulResource;
// use App\Filament\Resources\SemesterResource;
// use App\Filament\Resources\ClassroomResource;
use App\Filament\Resources\DkeamananResource;
use App\Filament\Resources\PberbaktiResource;
// use App\Filament\Resources\CpSemesterResource;
use App\Filament\Resources\DberbahasaResource;
use App\Filament\Resources\DberbusanaResource;
use App\Filament\Resources\DbertindakResource;
// use Filament\Widgets\StatsOverviewWidget\Stat;
// use App\Filament\Resources\DepartementResource;
// use App\Filament\Resources\InformatikaResource;
use App\Filament\Resources\PmemeliharaResource;

>>>>>>> 499be73fec3b3025ae93dfd1c227f31b9f086b32
use App\Filament\Resources\KesenianResource;
use App\Filament\Resources\SemesterResource;
use App\Filament\Resources\ClassroomResource;
use App\Filament\Resources\DkeamananResource;
use App\Filament\Resources\KindustriResource;
use App\Filament\Resources\PberbaktiResource;
use App\Filament\Resources\PramadhanResource;
use App\Filament\Resources\BerekayasaResource;
use App\Filament\Resources\CpSemesterResource;
use App\Filament\Resources\DberbahasaResource;
use App\Filament\Resources\DberbusanaResource;
use App\Filament\Resources\DbertindakResource;
use App\Filament\Resources\OkesehatanResource;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\DepartementResource;
use App\Filament\Resources\InformatikaResource;
use App\Filament\Resources\KewirausahaResource;
<<<<<<< HEAD
use App\Filament\Resources\PmemeliharaResource;
=======

>>>>>>> 499be73fec3b3025ae93dfd1c227f31b9f086b32
use Illuminate\Session\Middleware\StartSession;
use App\Filament\Resources\KeberkerjaanResource;
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
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
                // 'primary' => Color::Amber,
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
                            ...Smt1Resource::getNavigationItems(),
                            ...Smt2Resource::getNavigationItems(),
                            ...Smt3Resource::getNavigationItems(),
                            ...Smt4Resource::getNavigationItems(),
                            ...Smt5Resource::getNavigationItems(),
                            ...Smt6Resource::getNavigationItems(),
                            // ...PaiResource::getNavigationItems(),
                            // ...PpResource::getNavigationItems(),
                            // ...BindoResource::getNavigationItems(),
                            // ...PjokResource::getNavigationItems(),
                            // ...SejarahResource::getNavigationItems(),
                            // ...SbResource::getNavigationItems(),
                            // ...BsundaResource::getNavigationItems(),
                            // ...BarabResource::getNavigationItems(),
                        ]),

                    NavigationGroup::make('Ledger B Kejuruan Umum & DK')
                        ->items([
                            ...Usmt1Resource::getNavigationItems(),
                            ...Usmt2Resource::getNavigationItems(),
                            ...Usmt3Resource::getNavigationItems(),
                            ...Usmt4Resource::getNavigationItems(),
                            ...Usmt5Resource::getNavigationItems(),
                            ...Usmt6Resource::getNavigationItems(),
                            // ...BingResource::getNavigationItems(),
                            // ...InformatikaResource::getNavigationItems(),
                            // ...FisikaResource::getNavigationItems(),
                            // ...KimiaResource::getNavigationItems(),
                            // ...BandkResource::getNavigationItems(),
                            // ...FandkResource::getNavigationItems(),
                            // ...PemturResource::getNavigationItems(),
                            // ...PboResource::getNavigationItems(),
                            // ...PplResource::getNavigationItems(),
                        ]),

                    NavigationGroup::make('Ledger B Kejuruan KK & Pilih')
                        ->items([
                            ...Ksmt1Resource::getNavigationItems(),
                            ...Ksmt2Resource::getNavigationItems(),
                            ...Ksmt3Resource::getNavigationItems(),
                            ...Ksmt4Resource::getNavigationItems(),
                            ...Ksmt5Resource::getNavigationItems(),
                            ...Ksmt6Resource::getNavigationItems(),
                            //...BdResource::getNavigationItems(),
                            //...PbtgmResource::getNavigationItems(),
                            //...PwebResource::getNavigationItems(),
                            //...PpbResource::getNavigationItems(),
                            //...PkkResource::getNavigationItems(),
                            //...KbResource::getNavigationItems(),

                        ]),

                    NavigationGroup::make('Ledger DUDIKA')
                        ->items([

                            ...KindustriResource::getNavigationItems(),
                            ...PklResource::getNavigationItems(),
                            ...UjiKomResource::getNavigationItems(),

                        ]),

                    NavigationGroup::make('Ledger Ekskul, P5K, Presensi')
                        ->items([
                            ...Esmt1Resource::getNavigationItems(),
                            ...Esmt2Resource::getNavigationItems(),
                            ...Esmt3Resource::getNavigationItems(),
                            ...Esmt4Resource::getNavigationItems(),
                            ...Esmt5Resource::getNavigationItems(),
                            ...Esmt6Resource::getNavigationItems(),
                           
                           // ...PramukaResource::getNavigationItems(),
                           // ...KesenianResource::getNavigationItems(),
                           // ...PramadhanResource::getNavigationItems(),
                           // ...OkesehatanResource::getNavigationItems(),
                           // ...KAmuliaResource::getNavigationItems(),
                           // ...BkerjaResource::getNavigationItems(),
                           // ...KewirausahaResource::getNavigationItems(),
                           // ...BerekayasaResource::getNavigationItems(),
                           // ...KeberkerjaanResource::getNavigationItems(),
                           // ...SakitResource::getNavigationItems(),
                           // ...IzinResource::getNavigationItems(),
                           // ...AlfaResource::getNavigationItems(),

                        ]),


                    NavigationGroup::make('10 Disiplin')
                        ->items([
                            ...Dsmt1Resource::getNavigationItems(),
                            ...Dsmt2Resource::getNavigationItems(),
                            ...Dsmt3Resource::getNavigationItems(),
                            ...Dsmt4Resource::getNavigationItems(),
                            ...Dsmt5Resource::getNavigationItems(),
                            ...Dsmt6Resource::getNavigationItems(),
                            // ...DibadahResource::getNavigationItems(),
                            // ...DbelajarResource::getNavigationItems(),
                            // ...DbergaulResource::getNavigationItems(),
                            // ...DberbusanaResource::getNavigationItems(),
                            // ...DmenggunakanfasilitasResource::getNavigationItems(),
                            // ...Dk3Resource::getNavigationItems(),
                            // ...DberbahasaResource::getNavigationItems(),
                            // ...DbertindakResource::getNavigationItems(),
                            // ...DkeamananResource::getNavigationItems(),


                        ]),

                    NavigationGroup::make('10 Pembiasaan')
                        ->items([
                            ...Psmt1Resource::getNavigationItems(),
                            ...Psmt2Resource::getNavigationItems(),
                            ...Psmt3Resource::getNavigationItems(),
                            ...Psmt4Resource::getNavigationItems(),
                            ...Psmt5Resource::getNavigationItems(),
                            ...Psmt6Resource::getNavigationItems(),

                            // ...PberbaktiResource::getNavigationItems(),
                            // ...PbusanamuslimResource::getNavigationItems(),
                            // ...PmemeliharaadabResource::getNavigationItems(),
                            // ...PmembacaalquranResource::getNavigationItems(),
                            // ...PmemeliharaResource::getNavigationItems(),
                            // ...PmendirikansholatResource::getNavigationItems(),
                            // ...PtalimdanceramahResource::getNavigationItems(),
                            // ...PinfaqsejakdiniResource::getNavigationItems(),
                            // ...PmelaksanakansaumResource::getNavigationItems(),
                            // ...PmencintaitanahairResource::getNavigationItems(),

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
