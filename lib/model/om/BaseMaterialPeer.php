<?php


/**
 * Base static class for performing query and update operations on the 'material' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMaterialPeer {

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'material';

    /** the related Propel class for this table */
    const OM_CLASS = 'Material';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MaterialTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the ID_MATERIAL field */
    const ID_MATERIAL = 'material.ID_MATERIAL';

    /** the column name for the ARCHIVO field */
    const ARCHIVO = 'material.ARCHIVO';

    /** the column name for the TITULO field */
    const TITULO = 'material.TITULO';

    /** the column name for the EDITORIAL field */
    const EDITORIAL = 'material.EDITORIAL';

    /** the column name for the AUTOR field */
    const AUTOR = 'material.AUTOR';

    /** the column name for the DESCRIPCION field */
    const DESCRIPCION = 'material.DESCRIPCION';

    /** the column name for the FISICO field */
    const FISICO = 'material.FISICO';

    /** the column name for the TEMA_ID_TEMA field */
    const TEMA_ID_TEMA = 'material.TEMA_ID_TEMA';

    /** the column name for the BIBLIOTECA_ID_BIBLIOTECA field */
    const BIBLIOTECA_ID_BIBLIOTECA = 'material.BIBLIOTECA_ID_BIBLIOTECA';

    /** the column name for the CARRERA_ID_CARRERA field */
    const CARRERA_ID_CARRERA = 'material.CARRERA_ID_CARRERA';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Material objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Material[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdMaterial', 'Archivo', 'Titulo', 'Editorial', 'Autor', 'Descripcion', 'Fisico', 'TemaIdTema', 'BibliotecaIdBiblioteca', 'CarreraIdCarrera', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idMaterial', 'archivo', 'titulo', 'editorial', 'autor', 'descripcion', 'fisico', 'temaIdTema', 'bibliotecaIdBiblioteca', 'carreraIdCarrera', ),
        BasePeer::TYPE_COLNAME => array (self::ID_MATERIAL, self::ARCHIVO, self::TITULO, self::EDITORIAL, self::AUTOR, self::DESCRIPCION, self::FISICO, self::TEMA_ID_TEMA, self::BIBLIOTECA_ID_BIBLIOTECA, self::CARRERA_ID_CARRERA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_MATERIAL', 'ARCHIVO', 'TITULO', 'EDITORIAL', 'AUTOR', 'DESCRIPCION', 'FISICO', 'TEMA_ID_TEMA', 'BIBLIOTECA_ID_BIBLIOTECA', 'CARRERA_ID_CARRERA', ),
        BasePeer::TYPE_FIELDNAME => array ('id_material', 'archivo', 'titulo', 'editorial', 'autor', 'descripcion', 'fisico', 'tema_id_tema', 'biblioteca_id_biblioteca', 'carrera_id_carrera', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdMaterial' => 0, 'Archivo' => 1, 'Titulo' => 2, 'Editorial' => 3, 'Autor' => 4, 'Descripcion' => 5, 'Fisico' => 6, 'TemaIdTema' => 7, 'BibliotecaIdBiblioteca' => 8, 'CarreraIdCarrera' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idMaterial' => 0, 'archivo' => 1, 'titulo' => 2, 'editorial' => 3, 'autor' => 4, 'descripcion' => 5, 'fisico' => 6, 'temaIdTema' => 7, 'bibliotecaIdBiblioteca' => 8, 'carreraIdCarrera' => 9, ),
        BasePeer::TYPE_COLNAME => array (self::ID_MATERIAL => 0, self::ARCHIVO => 1, self::TITULO => 2, self::EDITORIAL => 3, self::AUTOR => 4, self::DESCRIPCION => 5, self::FISICO => 6, self::TEMA_ID_TEMA => 7, self::BIBLIOTECA_ID_BIBLIOTECA => 8, self::CARRERA_ID_CARRERA => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_MATERIAL' => 0, 'ARCHIVO' => 1, 'TITULO' => 2, 'EDITORIAL' => 3, 'AUTOR' => 4, 'DESCRIPCION' => 5, 'FISICO' => 6, 'TEMA_ID_TEMA' => 7, 'BIBLIOTECA_ID_BIBLIOTECA' => 8, 'CARRERA_ID_CARRERA' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id_material' => 0, 'archivo' => 1, 'titulo' => 2, 'editorial' => 3, 'autor' => 4, 'descripcion' => 5, 'fisico' => 6, 'tema_id_tema' => 7, 'biblioteca_id_biblioteca' => 8, 'carrera_id_carrera' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
     * @param      string $column The column name for current table. (i.e. MaterialPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MaterialPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MaterialPeer::ID_MATERIAL);
            $criteria->addSelectColumn(MaterialPeer::ARCHIVO);
            $criteria->addSelectColumn(MaterialPeer::TITULO);
            $criteria->addSelectColumn(MaterialPeer::EDITORIAL);
            $criteria->addSelectColumn(MaterialPeer::AUTOR);
            $criteria->addSelectColumn(MaterialPeer::DESCRIPCION);
            $criteria->addSelectColumn(MaterialPeer::FISICO);
            $criteria->addSelectColumn(MaterialPeer::TEMA_ID_TEMA);
            $criteria->addSelectColumn(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA);
            $criteria->addSelectColumn(MaterialPeer::CARRERA_ID_CARRERA);
        } else {
            $criteria->addSelectColumn($alias . '.ID_MATERIAL');
            $criteria->addSelectColumn($alias . '.ARCHIVO');
            $criteria->addSelectColumn($alias . '.TITULO');
            $criteria->addSelectColumn($alias . '.EDITORIAL');
            $criteria->addSelectColumn($alias . '.AUTOR');
            $criteria->addSelectColumn($alias . '.DESCRIPCION');
            $criteria->addSelectColumn($alias . '.FISICO');
            $criteria->addSelectColumn($alias . '.TEMA_ID_TEMA');
            $criteria->addSelectColumn($alias . '.BIBLIOTECA_ID_BIBLIOTECA');
            $criteria->addSelectColumn($alias . '.CARRERA_ID_CARRERA');
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
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * @return                 Material
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MaterialPeer::doSelect($critcopy, $con);
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
        return MaterialPeer::populateObjects(MaterialPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MaterialPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * @param      Material $obj A Material object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdMaterial();
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
     * @param      mixed $value A Material object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Material) {
                $key = (string) $value->getIdMaterial();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Material object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return   Material Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to material
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in AccesoMaterialPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AccesoMaterialPeer::clearInstancePool();
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
        $cls = MaterialPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MaterialPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MaterialPeer::addInstanceToPool($obj, $key);
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
     * @return array (Material object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MaterialPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MaterialPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MaterialPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MaterialPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MaterialPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tema table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTema(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related Biblioteca table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBiblioteca(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related Carrera table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCarrera(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Selects a collection of Material objects pre-filled with their Tema objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTema(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol = MaterialPeer::NUM_HYDRATE_COLUMNS;
        TemaPeer::addSelectColumns($criteria);

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TemaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TemaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TemaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TemaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Material) to $obj2 (Tema)
                $obj2->addMaterial($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Material objects pre-filled with their Biblioteca objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBiblioteca(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol = MaterialPeer::NUM_HYDRATE_COLUMNS;
        BibliotecaPeer::addSelectColumns($criteria);

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = BibliotecaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = BibliotecaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = BibliotecaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    BibliotecaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Material) to $obj2 (Biblioteca)
                $obj2->addMaterial($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Material objects pre-filled with their Carrera objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCarrera(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol = MaterialPeer::NUM_HYDRATE_COLUMNS;
        CarreraPeer::addSelectColumns($criteria);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CarreraPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CarreraPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CarreraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CarreraPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Material) to $obj2 (Carrera)
                $obj2->addMaterial($obj1);

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
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Selects a collection of Material objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
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

        MaterialPeer::addSelectColumns($criteria);
        $startcol2 = MaterialPeer::NUM_HYDRATE_COLUMNS;

        TemaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TemaPeer::NUM_HYDRATE_COLUMNS;

        BibliotecaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + BibliotecaPeer::NUM_HYDRATE_COLUMNS;

        CarreraPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CarreraPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Tema rows

            $key2 = TemaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = TemaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TemaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TemaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Material) to the collection in $obj2 (Tema)
                $obj2->addMaterial($obj1);
            } // if joined row not null

            // Add objects for joined Biblioteca rows

            $key3 = BibliotecaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = BibliotecaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = BibliotecaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    BibliotecaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Material) to the collection in $obj3 (Biblioteca)
                $obj3->addMaterial($obj1);
            } // if joined row not null

            // Add objects for joined Carrera rows

            $key4 = CarreraPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CarreraPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CarreraPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CarreraPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Material) to the collection in $obj4 (Carrera)
                $obj4->addMaterial($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tema table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTema(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related Biblioteca table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptBiblioteca(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related Carrera table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCarrera(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaterialPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
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
     * Selects a collection of Material objects pre-filled with all related objects except Tema.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTema(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol2 = MaterialPeer::NUM_HYDRATE_COLUMNS;

        BibliotecaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + BibliotecaPeer::NUM_HYDRATE_COLUMNS;

        CarreraPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CarreraPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Biblioteca rows

                $key2 = BibliotecaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = BibliotecaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = BibliotecaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    BibliotecaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Material) to the collection in $obj2 (Biblioteca)
                $obj2->addMaterial($obj1);

            } // if joined row is not null

                // Add objects for joined Carrera rows

                $key3 = CarreraPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CarreraPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CarreraPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CarreraPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Material) to the collection in $obj3 (Carrera)
                $obj3->addMaterial($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Material objects pre-filled with all related objects except Biblioteca.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptBiblioteca(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol2 = MaterialPeer::NUM_HYDRATE_COLUMNS;

        TemaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TemaPeer::NUM_HYDRATE_COLUMNS;

        CarreraPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CarreraPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::CARRERA_ID_CARRERA, CarreraPeer::ID_CARRERA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Tema rows

                $key2 = TemaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = TemaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = TemaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TemaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Material) to the collection in $obj2 (Tema)
                $obj2->addMaterial($obj1);

            } // if joined row is not null

                // Add objects for joined Carrera rows

                $key3 = CarreraPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CarreraPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CarreraPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CarreraPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Material) to the collection in $obj3 (Carrera)
                $obj3->addMaterial($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Material objects pre-filled with all related objects except Carrera.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Material objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCarrera(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        MaterialPeer::addSelectColumns($criteria);
        $startcol2 = MaterialPeer::NUM_HYDRATE_COLUMNS;

        TemaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TemaPeer::NUM_HYDRATE_COLUMNS;

        BibliotecaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + BibliotecaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MaterialPeer::TEMA_ID_TEMA, TemaPeer::ID_TEMA, $join_behavior);

        $criteria->addJoin(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, BibliotecaPeer::ID_BIBLIOTECA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseMaterialPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MaterialPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MaterialPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MaterialPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MaterialPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Tema rows

                $key2 = TemaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = TemaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = TemaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TemaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Material) to the collection in $obj2 (Tema)
                $obj2->addMaterial($obj1);

            } // if joined row is not null

                // Add objects for joined Biblioteca rows

                $key3 = BibliotecaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = BibliotecaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = BibliotecaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    BibliotecaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Material) to the collection in $obj3 (Biblioteca)
                $obj3->addMaterial($obj1);

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
      $dbMap = Propel::getDatabaseMap(BaseMaterialPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMaterialPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new MaterialTableMap());
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
        return MaterialPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Material or Criteria object.
     *
     * @param      mixed $values Criteria or Material object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Material object
        }

        if ($criteria->containsKey(MaterialPeer::ID_MATERIAL) && $criteria->keyContainsValue(MaterialPeer::ID_MATERIAL) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MaterialPeer::ID_MATERIAL.')');
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
     * Performs an UPDATE on the database, given a Material or Criteria object.
     *
     * @param      mixed $values Criteria or Material object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MaterialPeer::ID_MATERIAL);
            $value = $criteria->remove(MaterialPeer::ID_MATERIAL);
            if ($value) {
                $selectCriteria->add(MaterialPeer::ID_MATERIAL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MaterialPeer::TABLE_NAME);
            }

        } else { // $values is Material object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the material table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += MaterialPeer::doOnDeleteCascade(new Criteria(MaterialPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(MaterialPeer::TABLE_NAME, $con, MaterialPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MaterialPeer::clearInstancePool();
            MaterialPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Material or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Material object or primary key or array of primary keys
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
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Material) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(MaterialPeer::ID_MATERIAL, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += MaterialPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                MaterialPeer::clearInstancePool();
            } elseif ($values instanceof Material) { // it's a model object
                MaterialPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    MaterialPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            MaterialPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = MaterialPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related AccesoMaterial objects
            $criteria = new Criteria(AccesoMaterialPeer::DATABASE_NAME);
            
            $criteria->add(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $obj->getIdMaterial());
            $affectedRows += AccesoMaterialPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Material object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Material $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MaterialPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MaterialPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MaterialPeer::DATABASE_NAME, MaterialPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Material
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MaterialPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MaterialPeer::DATABASE_NAME);
        $criteria->add(MaterialPeer::ID_MATERIAL, $pk);

        $v = MaterialPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Material[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MaterialPeer::DATABASE_NAME);
            $criteria->add(MaterialPeer::ID_MATERIAL, $pks, Criteria::IN);
            $objs = MaterialPeer::doSelect($criteria, $con);
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
	    return sprintf('BaseMaterialPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseMaterialPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMaterialPeer::buildTableMap();

