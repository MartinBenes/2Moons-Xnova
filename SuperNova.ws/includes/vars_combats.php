<?php

if(!defined('INSIDE'))
{
  die('Hack attempt!');
}

$sn_data += array(
  SHIP_CARGO_SMALL => array(
    'name' => 'small_ship_cargo',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 2, TECH_ENGINE_CHEMICAL => 2),
    'cost' => array(
      RES_METAL     => 2000,
      RES_CRYSTAL   => 2000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_SMALL,
    'capacity' => 5000,
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_CHEMICAL,
        'speed' => 5000,
        'consumption' => 20,
        'min_level' => 2,
      ),
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 10000,
        'consumption' => 40,
        'min_level' => 5,
      ),
    ),
    'shield' => 10,
    'armor' => 400,
    'attack' => 5,
    'amplify' => array(SHIP_SPY => 100, SHIP_SATTELITE_SOLAR => 250, ),
  ),
  SHIP_CARGO_BIG => array(
    'name' => 'big_ship_cargo',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 4, TECH_ENGINE_CHEMICAL => 6),
    'cost' => array(
      RES_METAL     => 6000,
      RES_CRYSTAL   => 6000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_MEDIUM,
    'capacity' => 25000,
    'shield' => 25,
    'armor' => 1200,
    'attack' => 5,
    'amplify' => array(SHIP_SPY => 100, SHIP_SATTELITE_SOLAR => 250, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_CHEMICAL,
        'speed' => 7500,
        'consumption' => 50,
        'min_level' => 6,
      ),
    ),
  ),
  SHIP_CARGO_SUPER => array(
    'name' => 'supercargo',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 8, TECH_ENGINE_ION => 5, UNIT_PLAN_SHIP_CARGO_SUPER => 1),
    'cost' => array(
      RES_METAL     => 25000,
      RES_CRYSTAL   => 15000,
      RES_DEUTERIUM => 5000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 100000,
    'shield' => 50,
    'armor' => 3000,
    'attack' => 10,
    'amplify' => array(SHIP_SPY => 100, SHIP_SATTELITE_SOLAR => 250, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 5000,
        'consumption' => 100,
        'min_level' => 5,
      ),
    ),
  ),
  SHIP_CARGO_HYPER => array(
    'name' => 'planet_cargo_hyper',
    'type' => UNIT_SHIPS,
    'location' => LOC_PLANET,
    P_STACKABLE => true,
    'require' => array(STRUC_FACTORY_HANGAR => 10, TECH_ENGINE_HYPER => 5, UNIT_PLAN_SHIP_CARGO_HYPER => 1),
    'cost' => array(
      RES_METAL     => 500000,
      RES_CRYSTAL   => 200000,
      RES_DEUTERIUM => 100000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_HUGE,
    'capacity' => 1000000,
    'shield' => 200,
    'armor' => 70000,
    'attack' => 50,
    'amplify' => array(SHIP_SPY => 100, SHIP_SATTELITE_SOLAR => 250, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 2000,
        'consumption' => 1000,
        'min_level' => 5,
      ),
    ),
  ),

  SHIP_COLONIZER => array(
    'name' => 'colonizer',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 4, TECH_ENGINE_ION => 3, TECH_ASTROTECH => 2),
    'cost' => array(
      RES_METAL     => 10000,
      RES_CRYSTAL   => 20000,
      RES_DEUTERIUM => 10000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 7500,
    'shield' => 100,
    'armor' => 3000,
    'attack' => 50,
    'amplify' => array(SHIP_SPY => 10.001, SHIP_SATTELITE_SOLAR => 21, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 2500,
        'consumption' => 1000,
        'min_level' => 3,
      ),
    ),
  ),
  SHIP_RECYCLER => array(
    'name' => 'recycler',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 4, TECH_ENGINE_CHEMICAL => 6, TECH_SHIELD => 2),
    'cost' => array(
      RES_METAL     => 10000,
      RES_CRYSTAL   => 6000,
      RES_DEUTERIUM => 2000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_MEDIUM,
    'capacity' => 20000,
    'shield' => 10,
    'armor' => 1600,
    'attack' => 1,
    'amplify' => array(SHIP_SPY => 500.05, SHIP_SATTELITE_SOLAR => 1050, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_CHEMICAL,
        'speed' => 2000,
        'consumption' => 300,
        'min_level' => 6,
      ),
    ),
  ),
  SHIP_SPY => array(
    'name' => 'spy_sonde',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 3, TECH_ENGINE_CHEMICAL => 3, TECH_SPY => 2),
    'cost' => array(
      RES_METAL     => 0,
      RES_CRYSTAL   => 1000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_TINY,
    'capacity' => 5,
    'shield' =>  0.01,
    'armor' => 100,
    'attack' =>  0.01,
    'amplify' => array( SHIP_SPY => 1,),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_CHEMICAL,
        'speed' => 100000000,
        'consumption' => 1,
        'min_level' => 3,
      ),
    ),
  ),
  SHIP_SATTELITE_SOLAR => array(
    'name' => 'solar_satelit',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 1),
    'cost' => array(
      RES_METAL     => 1500,
      RES_CRYSTAL   => 2000,
      RES_DEUTERIUM => 100,
      RES_ENERGY    => 0, 
      'factor' => 1,
    ),
    'production' => array(
      RES_ENERGY    => create_function('$level, $production_factor, $user, $planet_row', 'return ($planet_row["temp_max"] / 4 + 20) * $level * (0.1 * $production_factor);'),
    ),
    P_HULL_SIZE => HULL_SIZE_TINY,
    'capacity' => 1,
    'shield' => 10,
    'armor' => 200,
    'attack' => 1,
    'amplify' => array(SHIP_SPY => 1, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_CHEMICAL,
        'speed' => 0,
        'consumption' => 0,
        'min_level' => 0,
      ),
    ),
    'comment' => 'Пулемет',
  ),



  SHIP_SMALL_FIGHTER_LIGHT => array(
    'name' => 'light_hunter',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 1, TECH_ENGINE_CHEMICAL => 1),
    'cost' => array(
      RES_METAL     => 3000,
      RES_CRYSTAL   => 1000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_SMALL,
    'capacity' => 50,
    'shield' => 10,
    'armor' => 400,
    'attack' => 50,
    'amplify' => array(SHIP_CARGO_SMALL => 16.4, SHIP_SPY => 10.001, SHIP_SATTELITE_SOLAR => 21, ),
    'engine' => array(
      array(
        'speed' => 12500,
        'consumption' => 20,
        'tech' => TECH_ENGINE_CHEMICAL,
        'min_level' => 1,
      ),
    ),
    'comment' => 'Автопушка + ракеты, мелкие щиты',
  ),
  SHIP_SMALL_FIGHTER_HEAVY => array(
    'name' => 'heavy_hunter',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 3, TECH_ARMOR => 2, TECH_ENGINE_ION => 2),
    'cost' => array(
      RES_METAL     => 6000,
      RES_CRYSTAL   => 4000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_SMALL,
    'capacity' => 100,
    'shield' => 25,
    'armor' => 1000,
    'attack' => 150,
    'amplify' => array(SHIP_CARGO_SMALL => 8.2, SHIP_SPY => 3.33367, SHIP_SATTELITE_SOLAR => 7, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 10000,
        'consumption' => 75,
        'min_level' => 2,
      ),
    ),
    'comment' => 'ЛеЛа+Ракеты',
  ),
  SHIP_SMALL_FIGHTER_ASSAULT => array(
    'name' => 'assault_ship',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 3, TECH_ARMOR => 2, TECH_ENGINE_ION => 2),
    'cost' => array(
      RES_METAL     => 10000,
      RES_CRYSTAL   => 5000,
      RES_DEUTERIUM => 1000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_SMALL,
    'capacity' => 150,
    'shield' =>  50,
    'armor' => 1500,
    'attack' => 281,
    'amplify' => array(),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 8000,
        'consumption' => 100,
        'min_level' => 2,
      ),
    ),
    'comment' => 'ТяЛа + Ракеты х2 + чутку бомб',
  ),

  SHIP_MEDIUM_FRIGATE => array(
    'name' => 'crusher',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 5, TECH_ENGINE_ION => 4, TECH_ION => 2),
    'cost' => array(
      RES_METAL     => 20000,
      RES_CRYSTAL   => 7000,
      RES_DEUTERIUM => 2000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_MEDIUM,
    'capacity' => 800,
    'shield' =>  50,
    'armor' => 2700,
    'attack' => 400,
    'amplify' => array(SHIP_SMALL_FIGHTER_LIGHT => 6.15, SHIP_SPY => 1.25013, SHIP_SATTELITE_SOLAR => 2.625, UNIT_DEF_TURRET_MISSILE => 5.5, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 15000,
        'consumption' => 300,
        'min_level' => 4,
      ),
    ),
    'comment' => '1 торпеда, ракеты, лазеры',
  ),
  SHIP_MEDIUM_DESTROYER => array(
    'name' => 'destoyer2',
    'type' => UNIT_SHIPS,
    'location' => LOC_PLANET,
    P_STACKABLE => true,
    'require' => array(STRUC_FACTORY_HANGAR => 5, TECH_ENGINE_ION => 4, TECH_ION => 2),
    'cost' => array(
      RES_METAL     => 32000,
      RES_CRYSTAL   => 11000,
      RES_DEUTERIUM => 3000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_MEDIUM,
    'capacity' => 1000,
    'shield' =>  120,
    'armor' =>  4300,
    'attack' => 750,
    'amplify' => array(),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 12500,
        'consumption' => 400,
        'min_level' => 4,
      ),
    ),
    'comment' => 'торпеды',
  ),

  SHIP_LARGE_CRUISER => array(
    'name' => 'battle_ship',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 7, TECH_ENGINE_HYPER => 4),
    'cost' => array(
      RES_METAL     => 45000,
      RES_CRYSTAL   => 15000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 1500,
    'shield' =>  200,
    'armor' =>  6000,
    'attack' => 1000,
    'amplify' => array(SHIP_SPY => 0.50005, SHIP_SATTELITE_SOLAR => 1.05, UNIT_DEF_TURRET_MISSILE => 1.76, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 10000,
        'consumption' => 500,
        'min_level' => 4,
      ),
    ),
  ),
  SHIP_LARGE_BOMBER => array(
    'name' => 'bomber_ship',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(TECH_ENGINE_ION => 6, STRUC_FACTORY_HANGAR => 8, TECH_PLASMA => 5),
    'cost' => array(
      RES_METAL     => 50000,
      RES_CRYSTAL   => 25000,
      RES_DEUTERIUM => 15000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 500,
    'shield' =>  500,
    'armor' =>  7500,
    'attack' => 1000,
    'amplify' => array(
      SHIP_SPY => 0.50005, SHIP_SATTELITE_SOLAR => 1.05,
      UNIT_DEF_TURRET_MISSILE => 4.4, UNIT_DEF_TURRET_LASER_SMALL => 4.5, UNIT_DEF_TURRET_LASER_BIG => 9, UNIT_DEF_TURRET_ION => 8, UNIT_DEF_TURRET_PLASMA => 1.3,
    ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 4000,
        'consumption' => 1000,
        'min_level' => 6,
      ),
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 5000,
        'consumption' => 1250,
        'min_level' => 8,
      ),
    ),
  ),
  SHIP_LARGE_BATTLESHIP => array(
    'name' => 'battleship',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 8, TECH_HYPERSPACE => 5, TECH_ENGINE_HYPER => 5, TECH_LASER => 12),
    'cost' => array(
      RES_METAL     => 30000,
      RES_CRYSTAL   => 40000,
      RES_DEUTERIUM => 15000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 750,
    'shield' => 400,
    'armor' => 7000,
    'attack' => 700,
    'amplify' => array(
      SHIP_CARGO_SUPER => 11.57143, SHIP_CARGO_SMALL => 2.92857, SHIP_CARGO_BIG => 5.25,
      SHIP_SMALL_FIGHTER_HEAVY => 5.85714, SHIP_MEDIUM_FRIGATE => 15.71429, SHIP_LARGE_CRUISER => 62, SHIP_SPY => 0.71436, SHIP_SATTELITE_SOLAR => 1.5,
    ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 10000,
        'consumption' => 250,
        'min_level' => 5,
      ),
    ),
  ),
  SHIP_LARGE_DESTRUCTOR => array(
    'name' => 'destructor',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 9, TECH_HYPERSPACE => 5, TECH_ENGINE_HYPER => 6),
    'cost' => array(
      RES_METAL     => 60000,
      RES_CRYSTAL   => 50000,
      RES_DEUTERIUM => 15000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_LARGE,
    'capacity' => 2000,
    'shield' =>  500,
    'armor' => 11000,
    'attack' => 2000,
    'amplify' => array(SHIP_SPY => 0.25003, SHIP_SATTELITE_SOLAR => 0.525, SHIP_LARGE_BATTLESHIP => 7.4, UNIT_DEF_TURRET_LASER_SMALL => 1.125, ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 5000,
        'consumption' => 1000,
        'min_level' => 6,
      ),
    ),
  ),

  SHIP_HUGE_DEATH_STAR => array(
    'name' => 'dearth_star',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 12, TECH_HYPERSPACE => 6, TECH_ENGINE_HYPER => 7, TECH_GRAVITON => 1, UNIT_PLAN_SHIP_DEATH_STAR => 1),
    'cost' => array(
      RES_METAL     => 5000000,
      RES_CRYSTAL   => 4000000,
      RES_DEUTERIUM => 1000000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_HUGE,
    'capacity' => 1000000,
    'shield' =>  50000,
    'armor' =>  900000,
    'attack' => 200000,
    'amplify' => array(
      SHIP_CARGO_SUPER => 2.025, SHIP_CARGO_SMALL => 0.41, SHIP_CARGO_BIG => 0.91875,
      SHIP_COLONIZER => 3.875, SHIP_RECYCLER => 2.0125, SHIP_SPY => 0.62506, SHIP_SATTELITE_SOLAR => 1.3125,

      SHIP_SMALL_FIGHTER_LIGHT => 0.41, SHIP_SMALL_FIGHTER_HEAVY => 0.5125, SHIP_MEDIUM_FRIGATE => 0.45375,
      SHIP_LARGE_CRUISER => 0.93, SHIP_LARGE_DESTRUCTOR => 0.2875, SHIP_LARGE_BATTLESHIP => 0.03,

      UNIT_DEF_TURRET_MISSILE => 0.02, UNIT_DEF_TURRET_LASER_SMALL => 0.025, UNIT_DEF_TURRET_LASER_BIG => 0.05, UNIT_DEF_TURRET_GAUSS => 0.05, UNIT_DEF_TURRET_ION => 0.25,
    ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 100,
        'consumption' => 1,
        'min_level' => 7,
      ),
    ),
  ),
  SHIP_HUGE_SUPERNOVA => array(
    'name' => 'supernova',
    'type' => UNIT_SHIPS,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 15, TECH_HYPERSPACE => 7, TECH_ENGINE_HYPER => 9, TECH_GRAVITON => 1, UNIT_PLAN_SHIP_SUPERNOVA => 1),
    'cost' => array(
      RES_METAL     => 20000000,
      RES_CRYSTAL   => 15000000,
      RES_DEUTERIUM => 5000000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    P_HULL_SIZE => HULL_SIZE_HUGE,
    'capacity' => 2000000,
    'shield' => 1000000,
    'armor' =>  3500000,
    'attack' =>  100000,
    'amplify' => array(
      SHIP_CARGO_SMALL => 1, SHIP_CARGO_BIG => 3, SHIP_CARGO_SUPER => 6, SHIP_CARGO_HYPER => 10,
      SHIP_RECYCLER => 5, SHIP_SPY => 2, SHIP_SATTELITE_SOLAR => 3, SHIP_COLONIZER => 8,

      SHIP_SMALL_FIGHTER_LIGHT => 0.861, SHIP_SMALL_FIGHTER_HEAVY => 0.871, SHIP_MEDIUM_FRIGATE => 5,
      SHIP_LARGE_BOMBER => 5, SHIP_LARGE_CRUISER => 1.86, SHIP_LARGE_BATTLESHIP => 1.11, SHIP_LARGE_DESTRUCTOR => 0.575,
      SHIP_HUGE_DEATH_STAR => 10, SHIP_HUGE_SUPERNOVA => 10,

      UNIT_DEF_TURRET_MISSILE => 0.04, UNIT_DEF_TURRET_LASER_SMALL => 0.05, UNIT_DEF_TURRET_LASER_BIG => 0.1, UNIT_DEF_TURRET_GAUSS => 0.1, UNIT_DEF_TURRET_ION => 0.5, UNIT_DEF_TURRET_PLASMA => 1,
      UNIT_DEF_SHIELD_SMALL => 1, UNIT_DEF_SHIELD_BIG => 1, UNIT_DEF_SHIELD_PLANET => 1,
    ),
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_HYPER,
        'speed' => 150,
        'consumption' => 250,
        'min_level' => 9,
      ),
    ),
  ),



  UNIT_DEF_TURRET_MISSILE => array(
    'name' => 'misil_launcher',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 1),
    'cost' => array(
      RES_METAL     => 2000,
      RES_CRYSTAL   => 0,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 20,
    'armor' => 200,
    'attack' => 80,
    'amplify' => array(SHIP_SPY => 7, ),
  ),
  UNIT_DEF_TURRET_LASER_SMALL => array(
    'name' => 'small_laser',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(TECH_ENERGY => 1, STRUC_FACTORY_HANGAR => 2, TECH_LASER => 3),
    'cost' => array(
      RES_METAL     => 1500,
      RES_CRYSTAL   => 500,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 25,
    'armor' => 200,
    'attack' => 100,
    'amplify' => array(SHIP_SPY => 5, ),
  ),
  UNIT_DEF_TURRET_LASER_BIG => array(
    'name' => 'big_laser',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(TECH_ENERGY => 3, STRUC_FACTORY_HANGAR => 4, TECH_LASER => 6),
    'cost' => array(
      RES_METAL     => 6000,
      RES_CRYSTAL   => 2000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 100,
    'armor' => 800,
    'attack' => 250,
    'amplify' => array(SHIP_SPY => 2, ),
  ),
  UNIT_DEF_TURRET_GAUSS => array(
    'name' => 'gauss_canyon',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 6, TECH_ENERGY => 6, TECH_WEAPON => 3, TECH_SHIELD => 1),
    'cost' => array(
      RES_METAL     => 20000,
      RES_CRYSTAL   => 15000,
      RES_DEUTERIUM => 2000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'armor' => 3500,
    'shield' => 200,
    'attack' => 1100,
    'amplify' => array(SHIP_SPY => 0.5, ),
  ),
  UNIT_DEF_TURRET_ION => array(
    'name' => 'ionic_canyon',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 4, TECH_ION => 4),
    'cost' => array(
      RES_METAL     => 2000,
      RES_CRYSTAL   => 6000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 500,
    'armor' => 800,
    'attack' => 150,
    'amplify' => array(SHIP_SPY => 3.3, ),
  ),
  UNIT_DEF_TURRET_PLASMA => array(
    'name' => 'buster_canyon',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_FACTORY_HANGAR => 8, TECH_PLASMA => 7),
    'cost' => array(
      RES_METAL     => 50000,
      RES_CRYSTAL   => 50000,
      RES_DEUTERIUM => 30000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 300,
    'armor' => 10000,
    'attack' => 3000,
    'amplify' => array(SHIP_SPY => 0.17, ),
  ),

  UNIT_DEF_SHIELD_SMALL => array(
    'name' => 'small_protection_shield',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'max' => 1,
    'location' => LOC_PLANET,
    'require' => array(TECH_SHIELD => 2, STRUC_FACTORY_HANGAR => 1),
    'cost' => array(
      RES_METAL     => 10000,
      RES_CRYSTAL   => 10000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 2000,
    'armor' => 2000,
    'attack' => 1,
    'amplify' => array(SHIP_SPY => 500, ),
  ),
  UNIT_DEF_SHIELD_BIG => array(
    'name' => 'big_protection_shield',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'max' => 1,
    'location' => LOC_PLANET,
    'require' => array(TECH_SHIELD => 6, STRUC_FACTORY_HANGAR => 6),
    'cost' => array(
      RES_METAL     => 50000,
      RES_CRYSTAL   => 50000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield' => 2000,
    'armor' => 10000,
    'attack' => 1,
    'amplify' => array(SHIP_SPY => 500, ),
  ),
  UNIT_DEF_SHIELD_PLANET => array(
    'name'      => 'planet_protector',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'max' => 1,
    'location' => LOC_PLANET,
    'require'   => array(UNIT_PLAN_DEF_SHIELD_PLANET => 1),
    'cost' => array(
      RES_METAL     => 10000000,
      RES_CRYSTAL   => 5000000,
      RES_DEUTERIUM => 2500000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'shield'    => 1000000,
    'armor'     => 1500000,
    'attack'    => 1000000,
    'amplify'   => array(
      SHIP_CARGO_SUPER => 0.2025, SHIP_CARGO_SMALL => 0.041, SHIP_CARGO_BIG => 0.098,
      SHIP_COLONIZER => 0.31, SHIP_RECYCLER => 0.161, SHIP_SPY => 0.05001, SHIP_SATTELITE_SOLAR => 0.105,

      SHIP_SMALL_FIGHTER_LIGHT => 0.03075, SHIP_SMALL_FIGHTER_HEAVY => 0.0615, SHIP_MEDIUM_FRIGATE => 0.055,
      SHIP_LARGE_CRUISER => 0.124, SHIP_LARGE_BOMBER => 0.08, SHIP_LARGE_DESTRUCTOR => 0.023, SHIP_LARGE_BATTLESHIP => 0.037,
    ),
  ),



  UNIT_DEF_MISSILE_INTERCEPTOR => array(
    'name' => 'interceptor_misil',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_SILO => 2),
    'size' => 1,
    'cost' => array(
      RES_METAL     => 8000,
      RES_CRYSTAL   => 2000,
      RES_DEUTERIUM => 0,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),

    'shield' => 1,
    'armor' => 1000,
    'attack' => 1,
  ),
  UNIT_DEF_MISSILE_INTERPLANET => array(
    'name' => 'interplanetary_misil',
    'type' => UNIT_DEFENCE,
    P_STACKABLE => true,
    'location' => LOC_PLANET,
    'require' => array(STRUC_SILO => 4, TECH_ENGINE_ION => 2),
    'size' => 3,
    'cost' => array(
      RES_METAL     => 12500,
      RES_CRYSTAL   => 2500,
      RES_DEUTERIUM => 10000,
      RES_ENERGY    => 0,
      'factor' => 1,
    ),
    'capacity' => 10,
    'engine' => array(
      array(
        'tech' => TECH_ENGINE_ION,
        'speed' => 10000000,
        'consumption' => 10,
        'min_level' => 2,
      ),
    ),

    'shield' => 1,
    'armor' => 1500,
    'attack' => 120000,
  ),
);