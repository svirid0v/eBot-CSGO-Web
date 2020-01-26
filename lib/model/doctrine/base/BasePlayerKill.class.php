<?php

/**
 * BasePlayerKill
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $match_id
 * @property integer $map_id
 * @property varchar $killer_name
 * @property integer $killer_id
 * @property varchar $killer_team
 * @property varchar $killed_name
 * @property integer $killed_id
 * @property varchar $killed_team
 * @property varchar $weapon
 * @property boolean $headshot
 * @property integer $round_id
 * @property Matchs $Match
 * @property Maps $Map
 * @property Players $Killer
 * @property Players $Killed
 * @property Doctrine_Collection $Round
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getMatchId()     Returns the current record's "match_id" value
 * @method integer             getMapId()       Returns the current record's "map_id" value
 * @method varchar             getKillerName()  Returns the current record's "killer_name" value
 * @method integer             getKillerId()    Returns the current record's "killer_id" value
 * @method varchar             getKillerTeam()  Returns the current record's "killer_team" value
 * @method varchar             getKilledName()  Returns the current record's "killed_name" value
 * @method integer             getKilledId()    Returns the current record's "killed_id" value
 * @method varchar             getKilledTeam()  Returns the current record's "killed_team" value
 * @method varchar             getWeapon()      Returns the current record's "weapon" value
 * @method boolean             getHeadshot()    Returns the current record's "headshot" value
 * @method integer             getRoundId()     Returns the current record's "round_id" value
 * @method Matchs              getMatch()       Returns the current record's "Match" value
 * @method Maps                getMap()         Returns the current record's "Map" value
 * @method Players             getKiller()      Returns the current record's "Killer" value
 * @method Players             getKilled()      Returns the current record's "Killed" value
 * @method Doctrine_Collection getRound()       Returns the current record's "Round" collection
 * @method PlayerKill          setId()          Sets the current record's "id" value
 * @method PlayerKill          setMatchId()     Sets the current record's "match_id" value
 * @method PlayerKill          setMapId()       Sets the current record's "map_id" value
 * @method PlayerKill          setKillerName()  Sets the current record's "killer_name" value
 * @method PlayerKill          setKillerId()    Sets the current record's "killer_id" value
 * @method PlayerKill          setKillerTeam()  Sets the current record's "killer_team" value
 * @method PlayerKill          setKilledName()  Sets the current record's "killed_name" value
 * @method PlayerKill          setKilledId()    Sets the current record's "killed_id" value
 * @method PlayerKill          setKilledTeam()  Sets the current record's "killed_team" value
 * @method PlayerKill          setWeapon()      Sets the current record's "weapon" value
 * @method PlayerKill          setHeadshot()    Sets the current record's "headshot" value
 * @method PlayerKill          setRoundId()     Sets the current record's "round_id" value
 * @method PlayerKill          setMatch()       Sets the current record's "Match" value
 * @method PlayerKill          setMap()         Sets the current record's "Map" value
 * @method PlayerKill          setKiller()      Sets the current record's "Killer" value
 * @method PlayerKill          setKilled()      Sets the current record's "Killed" value
 * @method PlayerKill          setRound()       Sets the current record's "Round" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlayerKill extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('player_kill');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('match_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('map_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('killer_name', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('killer_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('killer_team', 'varchar', 20, array(
             'type' => 'varchar',
             'length' => 20,
             ));
        $this->hasColumn('killed_name', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('killed_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('killed_team', 'varchar', 20, array(
             'type' => 'varchar',
             'length' => 20,
             ));
        $this->hasColumn('weapon', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
        $this->hasColumn('headshot', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('round_id', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Matchs as Match', array(
             'local' => 'match_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Maps as Map', array(
             'local' => 'map_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Players as Killer', array(
             'local' => 'killer_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Players as Killed', array(
             'local' => 'killed_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Round', array(
             'local' => 'id',
             'foreign' => 'kill_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}