<?php


/**
 * Base class that represents a query for the 'pjuridica' table.
 *
 * 
 *
 * @method     PjuridicaQuery orderByIdPjuridica($order = Criteria::ASC) Order by the id_pjuridica column
 * @method     PjuridicaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PjuridicaQuery orderByRazonSocial($order = Criteria::ASC) Order by the razon_social column
 * @method     PjuridicaQuery orderByCuitCuil($order = Criteria::ASC) Order by the cuit_cuil column
 *
 * @method     PjuridicaQuery groupByIdPjuridica() Group by the id_pjuridica column
 * @method     PjuridicaQuery groupByNombre() Group by the nombre column
 * @method     PjuridicaQuery groupByRazonSocial() Group by the razon_social column
 * @method     PjuridicaQuery groupByCuitCuil() Group by the cuit_cuil column
 *
 * @method     PjuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PjuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PjuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PjuridicaQuery leftJoinBiblioteca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Biblioteca relation
 * @method     PjuridicaQuery rightJoinBiblioteca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Biblioteca relation
 * @method     PjuridicaQuery innerJoinBiblioteca($relationAlias = null) Adds a INNER JOIN clause to the query using the Biblioteca relation
 *
 * @method     PjuridicaQuery leftJoinDomicilioJ($relationAlias = null) Adds a LEFT JOIN clause to the query using the DomicilioJ relation
 * @method     PjuridicaQuery rightJoinDomicilioJ($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DomicilioJ relation
 * @method     PjuridicaQuery innerJoinDomicilioJ($relationAlias = null) Adds a INNER JOIN clause to the query using the DomicilioJ relation
 *
 * @method     Pjuridica findOne(PropelPDO $con = null) Return the first Pjuridica matching the query
 * @method     Pjuridica findOneOrCreate(PropelPDO $con = null) Return the first Pjuridica matching the query, or a new Pjuridica object populated from the query conditions when no match is found
 *
 * @method     Pjuridica findOneByIdPjuridica(int $id_pjuridica) Return the first Pjuridica filtered by the id_pjuridica column
 * @method     Pjuridica findOneByNombre(string $nombre) Return the first Pjuridica filtered by the nombre column
 * @method     Pjuridica findOneByRazonSocial(string $razon_social) Return the first Pjuridica filtered by the razon_social column
 * @method     Pjuridica findOneByCuitCuil(string $cuit_cuil) Return the first Pjuridica filtered by the cuit_cuil column
 *
 * @method     array findByIdPjuridica(int $id_pjuridica) Return Pjuridica objects filtered by the id_pjuridica column
 * @method     array findByNombre(string $nombre) Return Pjuridica objects filtered by the nombre column
 * @method     array findByRazonSocial(string $razon_social) Return Pjuridica objects filtered by the razon_social column
 * @method     array findByCuitCuil(string $cuit_cuil) Return Pjuridica objects filtered by the cuit_cuil column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePjuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePjuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Pjuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PjuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PjuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PjuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PjuridicaQuery) {
            return $criteria;
        }
        $query = new PjuridicaQuery();
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
     * @return   Pjuridica|Pjuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PjuridicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PjuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Pjuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PJURIDICA`, `NOMBRE`, `RAZON_SOCIAL`, `CUIT_CUIL` FROM `pjuridica` WHERE `ID_PJURIDICA` = :p0';
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
            $obj = new Pjuridica();
            $obj->hydrate($row);
            PjuridicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pjuridica|Pjuridica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pjuridica[]|mixed the list of results, formatted by the current formatter
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
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pjuridica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPjuridica(1234); // WHERE id_pjuridica = 1234
     * $query->filterByIdPjuridica(array(12, 34)); // WHERE id_pjuridica IN (12, 34)
     * $query->filterByIdPjuridica(array('min' => 12)); // WHERE id_pjuridica > 12
     * </code>
     *
     * @param     mixed $idPjuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByIdPjuridica($idPjuridica = null, $comparison = null)
    {
        if (is_array($idPjuridica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $idPjuridica, $comparison);
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
     * @return PjuridicaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PjuridicaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the razon_social column
     *
     * Example usage:
     * <code>
     * $query->filterByRazonSocial('fooValue');   // WHERE razon_social = 'fooValue'
     * $query->filterByRazonSocial('%fooValue%'); // WHERE razon_social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $razonSocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByRazonSocial($razonSocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($razonSocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $razonSocial)) {
                $razonSocial = str_replace('*', '%', $razonSocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PjuridicaPeer::RAZON_SOCIAL, $razonSocial, $comparison);
    }

    /**
     * Filter the query on the cuit_cuil column
     *
     * Example usage:
     * <code>
     * $query->filterByCuitCuil('fooValue');   // WHERE cuit_cuil = 'fooValue'
     * $query->filterByCuitCuil('%fooValue%'); // WHERE cuit_cuil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuitCuil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function filterByCuitCuil($cuitCuil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuitCuil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuitCuil)) {
                $cuitCuil = str_replace('*', '%', $cuitCuil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PjuridicaPeer::CUIT_CUIL, $cuitCuil, $comparison);
    }

    /**
     * Filter the query by a related Biblioteca object
     *
     * @param   Biblioteca|PropelObjectCollection $biblioteca  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PjuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByBiblioteca($biblioteca, $comparison = null)
    {
        if ($biblioteca instanceof Biblioteca) {
            return $this
                ->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $biblioteca->getPjuridicaIdPjuridica(), $comparison);
        } elseif ($biblioteca instanceof PropelObjectCollection) {
            return $this
                ->useBibliotecaQuery()
                ->filterByPrimaryKeys($biblioteca->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBiblioteca() only accepts arguments of type Biblioteca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Biblioteca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function joinBiblioteca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Biblioteca');

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
            $this->addJoinObject($join, 'Biblioteca');
        }

        return $this;
    }

    /**
     * Use the Biblioteca relation Biblioteca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BibliotecaQuery A secondary query class using the current class as primary query
     */
    public function useBibliotecaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBiblioteca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Biblioteca', 'BibliotecaQuery');
    }

    /**
     * Filter the query by a related DomicilioJ object
     *
     * @param   DomicilioJ|PropelObjectCollection $domicilioJ  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PjuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDomicilioJ($domicilioJ, $comparison = null)
    {
        if ($domicilioJ instanceof DomicilioJ) {
            return $this
                ->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $domicilioJ->getPjuridicaIdPjuridica(), $comparison);
        } elseif ($domicilioJ instanceof PropelObjectCollection) {
            return $this
                ->useDomicilioJQuery()
                ->filterByPrimaryKeys($domicilioJ->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDomicilioJ() only accepts arguments of type DomicilioJ or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DomicilioJ relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function joinDomicilioJ($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DomicilioJ');

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
            $this->addJoinObject($join, 'DomicilioJ');
        }

        return $this;
    }

    /**
     * Use the DomicilioJ relation DomicilioJ object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DomicilioJQuery A secondary query class using the current class as primary query
     */
    public function useDomicilioJQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDomicilioJ($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DomicilioJ', 'DomicilioJQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pjuridica $pjuridica Object to remove from the list of results
     *
     * @return PjuridicaQuery The current query, for fluid interface
     */
    public function prune($pjuridica = null)
    {
        if ($pjuridica) {
            $this->addUsingAlias(PjuridicaPeer::ID_PJURIDICA, $pjuridica->getIdPjuridica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePjuridicaQuery