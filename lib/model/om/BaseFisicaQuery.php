<?php


/**
 * Base class that represents a query for the 'fisica' table.
 *
 * 
 *
 * @method     FisicaQuery orderByIdFisica($order = Criteria::ASC) Order by the id_fisica column
 * @method     FisicaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     FisicaQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     FisicaQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method     FisicaQuery orderByPassword($order = Criteria::ASC) Order by the password column
 *
 * @method     FisicaQuery groupByIdFisica() Group by the id_fisica column
 * @method     FisicaQuery groupByNombre() Group by the nombre column
 * @method     FisicaQuery groupByApellido() Group by the apellido column
 * @method     FisicaQuery groupByUsuario() Group by the usuario column
 * @method     FisicaQuery groupByPassword() Group by the password column
 *
 * @method     FisicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FisicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FisicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FisicaQuery leftJoinAccesoMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the AccesoMaterial relation
 * @method     FisicaQuery rightJoinAccesoMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AccesoMaterial relation
 * @method     FisicaQuery innerJoinAccesoMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the AccesoMaterial relation
 *
 * @method     FisicaQuery leftJoinCarreraFisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarreraFisica relation
 * @method     FisicaQuery rightJoinCarreraFisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarreraFisica relation
 * @method     FisicaQuery innerJoinCarreraFisica($relationAlias = null) Adds a INNER JOIN clause to the query using the CarreraFisica relation
 *
 * @method     Fisica findOne(PropelPDO $con = null) Return the first Fisica matching the query
 * @method     Fisica findOneOrCreate(PropelPDO $con = null) Return the first Fisica matching the query, or a new Fisica object populated from the query conditions when no match is found
 *
 * @method     Fisica findOneByIdFisica(int $id_fisica) Return the first Fisica filtered by the id_fisica column
 * @method     Fisica findOneByNombre(string $nombre) Return the first Fisica filtered by the nombre column
 * @method     Fisica findOneByApellido(string $apellido) Return the first Fisica filtered by the apellido column
 * @method     Fisica findOneByUsuario(string $usuario) Return the first Fisica filtered by the usuario column
 * @method     Fisica findOneByPassword(string $password) Return the first Fisica filtered by the password column
 *
 * @method     array findByIdFisica(int $id_fisica) Return Fisica objects filtered by the id_fisica column
 * @method     array findByNombre(string $nombre) Return Fisica objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Fisica objects filtered by the apellido column
 * @method     array findByUsuario(string $usuario) Return Fisica objects filtered by the usuario column
 * @method     array findByPassword(string $password) Return Fisica objects filtered by the password column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFisicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseFisicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Fisica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FisicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     FisicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FisicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FisicaQuery) {
            return $criteria;
        }
        $query = new FisicaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Fisica|Fisica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FisicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Fisica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_FISICA`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASSWORD` FROM `fisica` WHERE `ID_FISICA` = :p0';
        try {
            $stmt = $con->prepare($sql);			
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Fisica();
            $obj->hydrate($row);
            FisicaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Fisica|Fisica[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Fisica[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FisicaPeer::ID_FISICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FisicaPeer::ID_FISICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_fisica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFisica(1234); // WHERE id_fisica = 1234
     * $query->filterByIdFisica(array(12, 34)); // WHERE id_fisica IN (12, 34)
     * $query->filterByIdFisica(array('min' => 12)); // WHERE id_fisica > 12
     * </code>
     *
     * @param     mixed $idFisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByIdFisica($idFisica = null, $comparison = null)
    {
        if (is_array($idFisica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(FisicaPeer::ID_FISICA, $idFisica, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the apellido column
     *
     * Example usage:
     * <code>
     * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
     * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByApellido($apellido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellido)) {
                $apellido = str_replace('*', '%', $apellido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::APELLIDO, $apellido, $comparison);
    }

    /**
     * Filter the query on the usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuario('fooValue');   // WHERE usuario = 'fooValue'
     * $query->filterByUsuario('%fooValue%'); // WHERE usuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuario)) {
                $usuario = str_replace('*', '%', $usuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::USUARIO, $usuario, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query by a related AccesoMaterial object
     *
     * @param   AccesoMaterial|PropelObjectCollection $accesoMaterial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAccesoMaterial($accesoMaterial, $comparison = null)
    {
        if ($accesoMaterial instanceof AccesoMaterial) {
            return $this
                ->addUsingAlias(FisicaPeer::ID_FISICA, $accesoMaterial->getFisicaIdFisica(), $comparison);
        } elseif ($accesoMaterial instanceof PropelObjectCollection) {
            return $this
                ->useAccesoMaterialQuery()
                ->filterByPrimaryKeys($accesoMaterial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAccesoMaterial() only accepts arguments of type AccesoMaterial or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AccesoMaterial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function joinAccesoMaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AccesoMaterial');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AccesoMaterial');
        }

        return $this;
    }

    /**
     * Use the AccesoMaterial relation AccesoMaterial object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AccesoMaterialQuery A secondary query class using the current class as primary query
     */
    public function useAccesoMaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAccesoMaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AccesoMaterial', 'AccesoMaterialQuery');
    }

    /**
     * Filter the query by a related CarreraFisica object
     *
     * @param   CarreraFisica|PropelObjectCollection $carreraFisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCarreraFisica($carreraFisica, $comparison = null)
    {
        if ($carreraFisica instanceof CarreraFisica) {
            return $this
                ->addUsingAlias(FisicaPeer::ID_FISICA, $carreraFisica->getFisicaIdFisica(), $comparison);
        } elseif ($carreraFisica instanceof PropelObjectCollection) {
            return $this
                ->useCarreraFisicaQuery()
                ->filterByPrimaryKeys($carreraFisica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCarreraFisica() only accepts arguments of type CarreraFisica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CarreraFisica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function joinCarreraFisica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CarreraFisica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CarreraFisica');
        }

        return $this;
    }

    /**
     * Use the CarreraFisica relation CarreraFisica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CarreraFisicaQuery A secondary query class using the current class as primary query
     */
    public function useCarreraFisicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCarreraFisica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CarreraFisica', 'CarreraFisicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Fisica $fisica Object to remove from the list of results
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function prune($fisica = null)
    {
        if ($fisica) {
            $this->addUsingAlias(FisicaPeer::ID_FISICA, $fisica->getIdFisica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseFisicaQuery