<?php


/**
 * Base static class for performing query and update operations on the 'persona_domicilio' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaDomicilioPeer {

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'persona_domicilio';

    /** the related Propel class for this table */
    const OM_CLASS = 'PersonaDomicilio';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PersonaDomicilioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 4;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 4;

    /** the column name for the IDPERSONA_DOMICILIO field */
    const IDPERSONA_DOMICILIO = 'persona_domicilio.IDPERSONA_DOMICILIO';

    /** the column name for the PFISICA_ID_PFISICA field */
    const PFISICA_ID_PFISICA = 'persona_domicilio.PFISICA_ID_PFISICA';

    /** the column name for the PJURIDICA_ID_PJURIDICA field */
    const PJURIDICA_ID_PJURIDICA = 'persona_domicilio.PJURIDICA_ID_PJURIDICA';

    /** the column name for the DOMICILIO_ID_DOMICILIO field */
    const DOMICILIO_ID_DOMICILIO = 'persona_domicilio.DOMICILIO_ID_DOMICILIO';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of PersonaDomicilio objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PersonaDomicilio[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdpersonaDomicilio', 'PfisicaIdPfisica', 'PjuridicaIdPjuridica', 'DomicilioIdDomicilio', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpersonaDomicilio', 'pfisicaIdPfisica', 'pjuridicaIdPjuridica', 'domicilioIdDomicilio', ),
        BasePeer::TYPE_COLNAME => array (self::IDPERSONA_DOMICILIO, self::PFISICA_ID_PFISICA, self::PJURIDICA_ID_PJURIDICA, self::DOMICILIO_ID_DOMICILIO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPERSONA_DOMICILIO', 'PFISICA_ID_PFISICA', 'PJURIDICA_ID_PJURIDICA', 'DOMICILIO_ID_DOMICILIO', ),
        BasePeer::TYPE_FIELDNAME => array ('idpersona_domicilio', 'pfisica_id_pfisica', 'pjuridica_id_pjuridica', 'domicilio_id_domicilio', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdpersonaDomicilio' => 0, 'PfisicaIdPfisica' => 1, 'PjuridicaIdPjuridica' => 2, 'DomicilioIdDomicilio' => 3, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpersonaDomicilio' => 0, 'pfisicaIdPfisica' => 1, 'pjuridicaIdPjuridica' => 2, 'domicilioIdDomicilio' => 3, ),
        BasePeer::TYPE_COLNAME => array (self::IDPERSONA_DOMICILIO => 0, self::PFISICA_ID_PFISICA => 1, self::PJURIDICA_ID_PJURIDICA => 2, self::DOMICILIO_ID_DOMICILIO => 3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPERSONA_DOMICILIO' => 0, 'PFISICA_ID_PFISICA' => 1, 'PJURIDICA_ID_PJURIDICA' => 2, 'DOMICILIO_ID_DOMICILIO' => 3, ),
        BasePeer::TYPE_FIELDNAME => array ('idpersona_domicilio' => 0, 'pfisica_id_pfisica' => 1, 'pjuridica_id_pjuridica' => 2, 'domicilio_id_domicilio' => 3, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PersonaDomicilioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PersonaDomicilioPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PersonaDomicilioPeer::IDPERSONA_DOMICILIO);
            $criteria->addSelectColumn(PersonaDomicilioPeer::PFISICA_ID_PFISICA);
            $criteria->addSelectColumn(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA);
            $criteria->addSelectColumn(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO);
        } else {
            $criteria->addSelectColumn($alias . '.IDPERSONA_DOMICILIO');
            $criteria->addSelectColumn($alias . '.PFISICA_ID_PFISICA');
            $criteria->addSelectColumn($alias . '.PJURIDICA_ID_PJURIDICA');
            $criteria->addSelectColumn($alias . '.DOMICILIO_ID_DOMICILIO');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 PersonaDomicilio
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PersonaDomicilioPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return PersonaDomicilioPeer::populateObjects(PersonaDomicilioPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      PersonaDomicilio $obj A PersonaDomicilio object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpersonaDomicilio();
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A PersonaDomicilio object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PersonaDomicilio) {
                $key = (string) $value->getIdpersonaDomicilio();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PersonaDomicilio object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   PersonaDomicilio Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(self::$instances[$key])) {
                return self::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        self::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to persona_domicilio
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or NULL if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = PersonaDomicilioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PersonaDomicilioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PersonaDomicilioPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (PersonaDomicilio object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PersonaDomicilioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PersonaDomicilioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PersonaDomicilioPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pfisica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPfisica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pjuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPjuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Domicilio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDomicilio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with their Pfisica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPfisica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;
        PfisicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PfisicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PfisicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PfisicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PfisicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to $obj2 (Pfisica)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with their Pjuridica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPjuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;
        PjuridicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PjuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PjuridicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PjuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PjuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to $obj2 (Pjuridica)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with their Domicilio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDomicilio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;
        DomicilioPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DomicilioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DomicilioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DomicilioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DomicilioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to $obj2 (Domicilio)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol2 = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;

        PfisicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PfisicaPeer::NUM_HYDRATE_COLUMNS;

        PjuridicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PjuridicaPeer::NUM_HYDRATE_COLUMNS;

        DomicilioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + DomicilioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Pfisica rows

            $key2 = PfisicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PfisicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PfisicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PfisicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj2 (Pfisica)
                $obj2->addPersonaDomicilio($obj1);
            } // if joined row not null

            // Add objects for joined Pjuridica rows

            $key3 = PjuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = PjuridicaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = PjuridicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PjuridicaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj3 (Pjuridica)
                $obj3->addPersonaDomicilio($obj1);
            } // if joined row not null

            // Add objects for joined Domicilio rows

            $key4 = DomicilioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = DomicilioPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = DomicilioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    DomicilioPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj4 (Domicilio)
                $obj4->addPersonaDomicilio($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pfisica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPfisica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pjuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPjuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Domicilio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDomicilio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaDomicilioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with all related objects except Pfisica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPfisica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol2 = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;

        PjuridicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PjuridicaPeer::NUM_HYDRATE_COLUMNS;

        DomicilioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DomicilioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Pjuridica rows

                $key2 = PjuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PjuridicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PjuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PjuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj2 (Pjuridica)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row is not null

                // Add objects for joined Domicilio rows

                $key3 = DomicilioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DomicilioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = DomicilioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DomicilioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj3 (Domicilio)
                $obj3->addPersonaDomicilio($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with all related objects except Pjuridica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPjuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol2 = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;

        PfisicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PfisicaPeer::NUM_HYDRATE_COLUMNS;

        DomicilioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DomicilioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, DomicilioPeer::ID_DOMICILIO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Pfisica rows

                $key2 = PfisicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PfisicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PfisicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PfisicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj2 (Pfisica)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row is not null

                // Add objects for joined Domicilio rows

                $key3 = DomicilioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DomicilioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = DomicilioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DomicilioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj3 (Domicilio)
                $obj3->addPersonaDomicilio($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaDomicilio objects pre-filled with all related objects except Domicilio.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaDomicilio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDomicilio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaDomicilioPeer::addSelectColumns($criteria);
        $startcol2 = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS;

        PfisicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PfisicaPeer::NUM_HYDRATE_COLUMNS;

        PjuridicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PjuridicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaDomicilioPeer::PFISICA_ID_PFISICA, PfisicaPeer::ID_PFISICA, $join_behavior);

        $criteria->addJoin(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, PjuridicaPeer::ID_PJURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaDomicilioPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaDomicilioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaDomicilioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaDomicilioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaDomicilioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Pfisica rows

                $key2 = PfisicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PfisicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PfisicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PfisicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj2 (Pfisica)
                $obj2->addPersonaDomicilio($obj1);

            } // if joined row is not null

                // Add objects for joined Pjuridica rows

                $key3 = PjuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PjuridicaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = PjuridicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PjuridicaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (PersonaDomicilio) to the collection in $obj3 (Pjuridica)
                $obj3->addPersonaDomicilio($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePersonaDomicilioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePersonaDomicilioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new PersonaDomicilioTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return PersonaDomicilioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PersonaDomicilio or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaDomicilio object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PersonaDomicilio object
        }

        if ($criteria->containsKey(PersonaDomicilioPeer::IDPERSONA_DOMICILIO) && $criteria->keyContainsValue(PersonaDomicilioPeer::IDPERSONA_DOMICILIO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersonaDomicilioPeer::IDPERSONA_DOMICILIO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a PersonaDomicilio or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaDomicilio object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PersonaDomicilioPeer::IDPERSONA_DOMICILIO);
            $value = $criteria->remove(PersonaDomicilioPeer::IDPERSONA_DOMICILIO);
            if ($value) {
                $selectCriteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PersonaDomicilioPeer::TABLE_NAME);
            }

        } else { // $values is PersonaDomicilio object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the persona_domicilio table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PersonaDomicilioPeer::TABLE_NAME, $con, PersonaDomicilioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PersonaDomicilioPeer::clearInstancePool();
            PersonaDomicilioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PersonaDomicilio or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PersonaDomicilio object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PersonaDomicilioPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PersonaDomicilio) { // it's a model object
            // invalidate the cache for this single object
            PersonaDomicilioPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PersonaDomicilioPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            PersonaDomicilioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PersonaDomicilio object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PersonaDomicilio $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PersonaDomicilioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PersonaDomicilioPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(PersonaDomicilioPeer::DATABASE_NAME, PersonaDomicilioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PersonaDomicilio
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PersonaDomicilioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PersonaDomicilioPeer::DATABASE_NAME);
        $criteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, $pk);

        $v = PersonaDomicilioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PersonaDomicilio[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PersonaDomicilioPeer::DATABASE_NAME);
            $criteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, $pks, Criteria::IN);
            $objs = PersonaDomicilioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BasePersonaDomicilioPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BasePersonaDomicilioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePersonaDomicilioPeer::buildTableMap();

