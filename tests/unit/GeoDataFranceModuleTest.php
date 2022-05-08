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

namespace MyArtJaub\Tests\Webtrees\Module\GeoData\France\Unit;

use Fisharebest\Webtrees\TestCase;
use MyArtJaub\Webtrees\Module\GeoData\France\GeoDataFranceModule;
use MyArtJaub\Webtrees\Module\GeoData\France\PlaceMappers\SimpleFrancePlaceMapper;

/**
 * Class GeoDataFranceModuleTest.
 *
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\GeoDataFranceModule
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceArrondMunicipaux
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCodePostauxLatest
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCommunes2011
 * @covers \MyArtJaub\Webtrees\Module\GeoData\France\Maps\FranceCommunesLatest
 */
class GeoDataFranceModuleTest extends TestCase
{
    //phpcs:ignore Generic.Files.LineLength.TooLong
    private const REGEX_SEMVER = '/^(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)\.(?:0|[1-9]\d*)(?:-(?:(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+(?:[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$/';

    public function testModuleMetadata(): void
    {
        $module = new GeoDataFranceModule();

        self::assertSame('Geographical data - France', $module->title());
        self::assertSame('Data to be used in geographical data analysis - France', $module->description());
        self::assertSame('https://github.com/jon48/webtrees-mod-maj-geodata-france', $module->customModuleSupportUrl());
        self::assertMatchesRegularExpression(self::REGEX_SEMVER, $module->customModuleVersion());
    }

    public function testListMapDefinition(): void
    {
        $module = new GeoDataFranceModule();
        self::assertCount(296, $module->listMapDefinition());
    }

    public function testListPlaceMappers(): void
    {
        $module = new GeoDataFranceModule();
        $mappers = $module->listPlaceMappers();
        self::assertCount(1, $mappers);
        self::assertSame(SimpleFrancePlaceMapper::class, $mappers[0]);
    }
}
