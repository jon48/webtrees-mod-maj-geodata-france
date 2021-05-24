[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jon48/webtrees-mod-maj-geodata-france/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/jon48/webtrees-mod-maj-geodata-france/?branch=main)
[![Code Climate](https://codeclimate.com/github/jon48/webtrees-mod-maj-geodata-france/badges/gpa.svg)](https://codeclimate.com/github/jon48/webtrees-mod-maj-geodata-france)
[![codecov](https://codecov.io/gh/jon48/webtrees-mod-maj-geodata-france/branch/main/graph/badge.svg?token=B65SXNYIWI)](https://codecov.io/gh/jon48/webtrees-mod-maj-geodata-france)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0)
[![License: CC BY-SA 4.0](https://img.shields.io/badge/License-CC%20BY--SA%204.0-lightgrey.svg)](http://creativecommons.org/licenses/by-sa/4.0/)
[![License: ODbL](https://img.shields.io/badge/License-ODbL-brightgreen.svg)](https://opendatacommons.org/licenses/odbl/)

# MyArtJaub Geographical Data for France Module
Geographical data for use in MyArtJaub modules, for the France perimeter.

## Contents

* [License](#license)
* [Introduction](#introduction)
* [Data sources](#data-sources)
* [System requirements](#system-requirements)
* [Installation / Upgrading](#installation--upgrading)
* [Issues / Security](#issues--security)
* [Contacts](#contacts)

### License

* **webtrees-mod-maj-geodata-france: MyArtJaub Geographical Data for France Module for webtrees**
* Copyright (C) 2021 Jonathan Jaubart.
* Derived from **webtrees** - Copyright (C) 2010 to 2021  webtrees development team.
* Derived from PhpGedView - Copyright (C) 2002 to 2010  PGV Development Team.

This repository is licensed differently for the software components and the data ones. Indications of the appropriate 
license are included in the folders or the source code documentation.

#### Software

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

#### Data

This MYARTJAUB GEODATA FRANCE DATASET is made available under the Open Database License.
Any rights in individual contents of the database are licensed under the Creative Commons Attribution Share Alike 4.0
International License.

Contains information from OPENSTREETMAP, which is made available here under the Open Database License (ODbL).

Contains information from FOND DE CARTE DES CODES POSTAUX EN FRANCE METROPOLITAINE, which is made available here
under the Open Database License (ODbL). 

Contains information from BASE OFFICIELLE DES CODES POSTAUX, which is made available here
under the Open Database License (ODbL). 

You should have received a copy of the Open Database License
along with this program. If not, see <http://opendatacommons.org/licenses/odbl/1.0/>.

You should have received a copy of the Creative Commons Attribution Share Alike 4.0
International along with this program. If not, see <https://creativecommons.org/licenses/by-sa/4.0/legalcode>.

### Introduction

The module is an aggregation of geographical data (maps, place mappings, ...) for use with other MyArtJaub modules,
mainly the Geographical Dispersion module. This module covers only data for the French territory.

It includes maps represented with the GeoJSON format, with different levels of granularity (French *régions*,
*départements*, *communes*,...), as well as some history when appropriate.
In particular, *régions* are available with their borders both before and after the 2015 territorial reform, and
*communes* territories can be found as of 2011, or merged wihin a *commune nouvelle*, following the 2010 territorial
reform.

The module provides an additional place mapper to the ones available in the Geographical Dispersion module,
customised for the French places. It includes mappings between the pre and post-2016 *régions*, and between the 
*communes nouvelles* and the *communes* they replace, when there is no ambiguity.

*Jonathan Jaubart*

### Data sources

The data available in this module have been generated based on publicly available data, provided by the open plaform
for French public data [data.gouv.fr](https://www.data.gouv.fr/).

In details, the source data are:

- [ADMIN EXPRESS dataset](https://www.data.gouv.fr/en/datasets/admin-express/) - IGN - April 1, 2021  
Dataset provided by the IGN (*Institut National de l'Information Géographique et Forestière*) describing the
administrative structures for the French territory.  
Mainly data in shapefile format updated annually since 2017, replacing the GEOFLA dataset below.  
**Licence**: [License ouverte/Open licence Etalab 2.0](https://www.etalab.gouv.fr/licence-ouverte-open-licence)


- [GEOFLA® dataset](https://geoservices.ign.fr/documentation/diffusion/telechargement-donnees-libres.html#geofla) - IGN - March 13, 2021  
Dataset provided by the IGN (*Institut National de l'Information Géographique et Forestière*) describing the
administrative structures for the French territory.  
Mainly data in shapefile format updated annually, superseeded by the ADMIN EXPRESS dataset above since 2017.  
**Licence**: [License ouverte/Open licence Etalab 2.0](https://www.etalab.gouv.fr/licence-ouverte-open-licence)


- [OpenStreetMap regions boundaries](https://www.data.gouv.fr/en/datasets/contours-des-regions-francaises-sur-openstreetmap/) - OpenStreetMap - March 6, 2014  
Data in shapefile format exported  from OpenStreetMap, based on the contributions of its users.  
**License**: [Open Database License](http://opendatacommons.org/licenses/odbl/1.0/)  
© les contributeurs d'OpenStreetMap sous licence ODbL


- [French postal codes map](https://www.data.gouv.fr/fr/datasets/fond-de-carte-des-codes-postaux/) - Ciril Group/Géoclip - June 21, 2018  
Data in shapefile format provided by Ciril Group describing the postal codes areas for metropolitan France.  
**License**: [Open Database License](http://opendatacommons.org/licenses/odbl/1.0/)  


- [COG - Code officiel géographique](https://www.insee.fr/fr/information/2560452) - INSEE - February 23, 2021  
Dataset provided by the INSEE (Institut National de la Statistique et des Études Économiques) describing the list of 
French territorial authorities (*régions*, *départements*, *arrondissements*, *cantons*, *communes*).  
Data in CSV or plain text format updated annually  
**Licence**: [License ouverte/Open licence Etalab 2.0](https://www.etalab.gouv.fr/licence-ouverte-open-licence)


- [French postal codes database](https://www.data.gouv.fr/en/datasets/base-officielle-des-codes-postaux/) - La Poste - April 9, 2019  
Dataset in CSV format provided by La Poste describing the list of postal codes and their mapping to INSEE commune codes.  
**License**: [Open Database License](http://opendatacommons.org/licenses/odbl/1.0/)  

### System requirements

It is required to run at least PHP 7.4 to be able to run the **webtrees-mod-maj-geodata-france** module.

As well, both webtrees 2.1 and webtrees-lib are required for this module, with their respective dependencies.

### Installation / Upgrading

It is recommended to install and upgrade **webtrees-mod-maj-geodata-france** via Composer.

To install the module, run the command:

```shell
composer require jon48/webtrees-mod-maj-geodata-france --update-no-dev
```
	
In order to update the package, run the command:

```shell
composer update jon48/webtrees-mod-maj-geodata-france --no-dev
```

### Issues / Security

Issues should be raised in the [GitHub repository](https://github.com/jon48/webtrees-mod-translationtool/issues) for **jon48/webtrees-mod-maj-geodata-france**.

A [security policy document](SECURITY.md) has been issued for this repository.

### Contacts

General questions on the standard **webtrees** software should be addressed to the
[official forum](http://www.webtrees.net/index.php/forum)

You can contact the author (Jonathan Jaubart) of the **webtrees-mod-maj-geodata-france** project 
through his personal [GeneaJaubart website](http://genea.jaubart.com/wt/) (link at the bottom of the page), 
or raise an issue in Github.

