<?php

/**
 * webtrees-mod-maj-geodata-france: MyArtJaub Geographical data for webtrees - France
 *
 * @package MyArtJaub\Webtrees\Module\GeoData
 * @subpackage France
 * @author Jonathan Jaubart <dev@jaubart.com>
 * @copyright Copyright (c) 2021-2022, Jonathan Jaubart
 * @license https://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */

declare(strict_types=1);

namespace MyArtJaub\Tests\Webtrees\Module\GeoData\France\Unit\PlaceMappers;

use Fisharebest\Webtrees\Cache;
use Fisharebest\Webtrees\Place;
use Fisharebest\Webtrees\Registry;
use Fisharebest\Webtrees\Tree;
use Fisharebest\Webtrees\TestCase;
use Fisharebest\Webtrees\Contracts\CacheFactoryInterface;
use Fisharebest\Webtrees\Services\ModuleService;
use MyArtJaub\Webtrees\Common\GeoDispersion\Config\NullPlaceMapperConfig;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\MapDefinitionInterface;
use MyArtJaub\Webtrees\Contracts\GeoDispersion\PlaceMapperConfigInterface;
use MyArtJaub\Webtrees\Module\GeoData\France\GeoDataFranceModule;
use MyArtJaub\Webtrees\Module\GeoData\France\PlaceMappers\SimpleFrancePlaceMapper;
use Symfony\Component\Cache\Adapter\NullAdapter;

/**
 * Class SimpleFrancePlaceMapperTest.
 *
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\PlaceMappers\SimpleFrancePlaceMapper
 */
class SimpleFrancePlaceMapperTest extends TestCase
{
    protected Tree $tree;
    protected SimpleFrancePlaceMapper $simple_france_place_mapper;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->simple_france_place_mapper = new SimpleFrancePlaceMapper();
        $this->tree = $this->createMock(Tree::class);

        $cache_factory = self::createMock(CacheFactoryInterface::class);
        $cache_factory->method('array')->willReturn(new Cache(new NullAdapter()));
        Registry::cache($cache_factory);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->simple_france_place_mapper);
    }

    public function testTitle(): void
    {
        self::assertSame(
            'Mapping on place name, with known variations in France',
            $this->simple_france_place_mapper->title()
        );
    }

    public function testBoot(): void
    {
        $success = true;
        try {
            $this->simple_france_place_mapper->boot();
        } catch (\Throwable $ex) {
            $success = false;
        }
        self::assertTrue($success);
    }

    public function testConfig(): void
    {
        self::assertInstanceOf(NullPlaceMapperConfig::class, $this->simple_france_place_mapper->config());

        $config = $this->createMock(PlaceMapperConfigInterface::class);
        $this->simple_france_place_mapper->setConfig($config);
        self::assertInstanceOf(NullPlaceMapperConfig::class, $this->simple_france_place_mapper->config());
    }

    public function testData(): void
    {
        self::assertNull($this->simple_france_place_mapper->data('test'));

        $this->simple_france_place_mapper->setData('test', 'TEST_STRING');
        self::assertSame('TEST_STRING', $this->simple_france_place_mapper->data('test'));
    }

    public function testNullResultMap(): void
    {
        $place = $this->createMock(Place::class);
        self::assertNull($this->simple_france_place_mapper->data('map'));
        self::assertNull($this->simple_france_place_mapper->map($place, 'feature'));

        $this->simple_france_place_mapper->setData('map', 'NOT_A_CORRECT_INPUT');
        self::assertNull($this->simple_france_place_mapper->map($place, 'feature'));
    }

    public function testNoModuleMap(): void
    {
        $map_communes_48 = $this->createMock(MapDefinitionInterface::class);
        $map_communes_48->method('id')->willReturn('fr-dpt-48-communes');

        $place = new Place('Javols, Lozère', $this->tree);
        $this->simple_france_place_mapper->setData('map', $map_communes_48);

        $module_service = $this->createMock(ModuleService::class);
        $module_service->method('findByInterface')
            ->with(GeoDataFranceModule::class)
            ->willReturn(collect());
        app()->instance(ModuleService::class, $module_service);

        self::assertSame('Javols', $this->simple_france_place_mapper->map($place, 'feature'));
    }

    /**
     * Data provider to test map method
     *
     * @return mixed[][]
     */
    public function placeMapProvider(): array
    {
        $valid_resources = __DIR__ . '/../../resources/valid';
        $invalid_resources = __DIR__ . '/../../resources/invalid';
        $not_exist_resources = __DIR__ . '/../../resources/doesnotexist';


        $map_no_mapping = $this->createMock(MapDefinitionInterface::class);
        $map_no_mapping->method('id')->willReturn('no-mapping');

        $map_region_2016 = $this->createMock(MapDefinitionInterface::class);
        $map_region_2016->method('id')->willReturn('fr-metropole-regions-2016');

        $map_departements = $this->createMock(MapDefinitionInterface::class);
        $map_departements->method('id')->willReturn('fr-departements');

        $map_communes_48 = $this->createMock(MapDefinitionInterface::class);
        $map_communes_48->method('id')->willReturn('fr-dpt-48-communes');

        $map_communes_48_old = $this->createMock(MapDefinitionInterface::class);
        $map_communes_48_old->method('id')->willReturn('fr-dpt-48-communes-2011');

        $map_aubrac = $this->createMock(MapDefinitionInterface::class);
        $map_aubrac->method('id')->willReturn('fr-area-aubrac-lot-margeride-planeze-communes');

        return [
            [ $valid_resources, $map_no_mapping, 'no_map', 'no_map' ],
            [ $valid_resources, $map_no_mapping, 'Alsace', 'Alsace' ],
            [ $valid_resources, $map_no_mapping, 'Alsace, France', 'Alsace' ],
            [ $valid_resources, $map_region_2016, 'no_map', 'no_map' ],
            [ $valid_resources, $map_region_2016, 'Alsace', 'Grand Est' ],
            [ $valid_resources, $map_region_2016, 'Alsace, France', 'Grand Est' ],
            [ $valid_resources, $map_region_2016, 'Bretagne', 'Bretagne' ],
            [ $valid_resources, $map_region_2016, 'Basses-Alpes, France', 'Basses-Alpes' ],
            [ $valid_resources, $map_departements, 'Alsace', 'Alsace' ],
            [ $valid_resources, $map_departements, 'Lozère, France', 'Lozère' ],
            [ $valid_resources, $map_departements, 'Basses-Alpes, France', 'Alpes-de-Haute-Provence' ],
            [ $valid_resources, $map_communes_48, 'Alsace', 'Alsace' ],
            [ $valid_resources, $map_communes_48, 'Lozère, France', 'Lozère' ],
            [ $valid_resources, $map_communes_48, 'Marvejols, Lozère', 'Marvejols' ],
            [ $valid_resources, $map_communes_48, 'Javols, Lozère', 'Peyre en Aubrac' ],
            [ $invalid_resources, $map_communes_48, 'Javols, Lozère', 'Javols' ],
            [ $not_exist_resources, $map_communes_48, 'Javols, Lozère', 'Javols' ],
            [ $valid_resources, $map_communes_48_old, 'Marvejols, Lozère', 'Marvejols' ],
            [ $valid_resources, $map_communes_48_old, 'Javols, Lozère', 'Javols' ],
            [ $valid_resources, $map_aubrac, 'Nasbinals, Lozère', 'Nasbinals' ],
            [ $valid_resources, $map_aubrac, 'Prinsuéjols, Lozère', 'Prinsuéjols-Malbouzon' ],
            [ $invalid_resources, $map_aubrac, 'Prinsuéjols, Lozère', 'Prinsuéjols' ],
            [ $not_exist_resources, $map_aubrac, 'Prinsuéjols, Lozère', 'Prinsuéjols' ]
        ];
    }

    /**
     * @dataProvider placeMapProvider
     */
    public function testMap(string $path, MapDefinitionInterface $map, string $place_name, string $expected): void
    {
        $this->bindResourcesFolderTo($path);
        $place = new Place($place_name, $this->tree);
        $this->simple_france_place_mapper->setData('map', $map);
        self::assertSame($expected, $this->simple_france_place_mapper->map($place, 'feature'));
    }

    /**
     * Bind the container for ModuleService to a module pointing to a specific resource folder
     *
     * @param string $resources_path
     */
    protected function bindResourcesFolderTo(string $resources_path): void
    {
        $module_service = $this->createMock(ModuleService::class);
        $geodata_module = $this->createMock(GeoDataFranceModule::class);
        $geodata_module->method('resourcesFolder')->willReturn($resources_path);

        $module_service->method('findByInterface')
            ->with(GeoDataFranceModule::class)
            ->willReturn(collect([$geodata_module]));
        app()->instance(ModuleService::class, $module_service);
    }
}
