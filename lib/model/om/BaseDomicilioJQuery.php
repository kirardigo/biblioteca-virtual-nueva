<?php


/**
 * Base class that represents a query for the 'domicilio_j' table.
 *
 * 
 *
 * @method     DomicilioJQuery orderByIdDomicilioJ($order = Criteria::ASC) Order by the id_domicilio_j column
 * @method     DomicilioJQuery orderByBarrio($order = Criteria::ASC) Order by the barrio column
 * @method     DomicilioJQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     DomicilioJQuery orderByAltura($order = Criteria::ASC) Order by the altura column
 * @method     DomicilioJQuery orderByCodPostal($order = Criteria::ASC) Order by the cod_postal column
 * @method     DomicilioJQuery orderByReal($order = Criteria::ASC) Order by the real column
 * @method     DomicilioJQuery orderByLocalidadIdLocalidad($order = Criteria::ASC) Order by the localidad_id_localidad column
 * @method     DomicilioJQuery orderByPjuridicaIdPjuridica($order = Criteria::ASC) Order by the pjuridica_id_pjuridica column
 *
 * @method     DomicilioJQuery groupByIdDomicilioJ() Group by the id_domicilio_j column
 * @method     DomicilioJQuery groupByBarrio() Group by the barrio column
 * @method     DomicilioJQuery groupByCalle() Group by the calle column
 * @method     DomicilioJQuery groupByAltura() Group by the altura column
 * @method     DomicilioJQuery groupByCodPostal() Group by the cod_postal column
 * @method     DomicilioJQuery groupByReal() Group by the real column
 * @method     DomicilioJQuery groupByLocalidadIdLocalidad() Group by the localidad_id_localidad column
 * @method     DomicilioJQuery groupByPjuridicaIdPjuridica() Group by the pjuridica_id_pjuridica column
 *
 * @method     DomicilioJQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DomicilioJQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DomicilioJQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DomicilioJQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     DomicilioJQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     DomicilioJQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     DomicilioJQuery leftJoinPjuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pjuridica relation
 * @method     DomicilioJQuery rightJoinPjuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pjuridica relation
 * @method     DomicilioJQuery innerJoinPjuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pjuridica relation
 *
 * @method     DomicilioJ findOne(PropelPDO $con = null) Return the first DomicilioJ matching the query
 * @method     DomicilioJ findOneOrCreate(PropelPDO $con = null) Return the first DomicilioJ matching the query, or a new DomicilioJ object populated from the query conditions when no match is found
 *
 * @method     DomicilioJ findOneByIdDomicilioJ(int $id_domicilio_j) Return the first DomicilioJ filtered by the id_domicilio_j column
 * @method     DomicilioJ findOneByBarrio(string $barrio) Return the first DomicilioJ filtered by the barrio column
 * @method     DomicilioJ findOneByCalle(string $calle) Return the first DomicilioJ filtered by the calle column
 * @method     DomicilioJ findOneByAltura(string $altura) Return the first DomicilioJ filtered by the altura column
 * @method     DomicilioJ findOneByCodPostal(string $cod_postal) Return the first DomicilioJ filtered by the cod_postal column
 * @method     DomicilioJ findOneByReal(boolean $real) Return the first DomicilioJ filtered by the real column
 * @method     DomicilioJ findOneByLocalidadIdLocalidad(int $localidad_id_localidad) Return the first DomicilioJ filtered by the localidad_id_localidad column
 * @method     DomicilioJ findOneByPjuridicaIdPjuridica(int $pjuridica_id_pjuridica) Return the first DomicilioJ filtered by the pjuridica_id_pjuridica column
 *
 * @method     array findByIdDomicilioJ(int $id_domicilio_j) Return DomicilioJ objects filtered by the id_domicilio_j column
 * @method     array findByBarrio(string $barrio) Return DomicilioJ objects filtered by the barrio column
 * @method     array findByCalle(string $calle) Return DomicilioJ objects filtered by the calle column
 * @method     array findByAltura(string $altura) Return DomicilioJ objects filtered by the altura column
 * @method     array findByCodPostal(string $cod_postal) Return DomicilioJ objects filtered by the cod_postal column
 * @method     array findByReal(boolean $real) Return DomicilioJ objects filtered by the real column
 * @method     array findByLocalidadIdLocalidad(int $localidad_id_localidad) Return DomicilioJ objects filtered by the localidad_id_localidad column
 * @method     array findByPjuridicaIdPjuridica(int $pjuridica_id_pjuridica) Return DomicilioJ objects filtered by the pjuridica_id_pjuridica column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDomicilioJQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDomicilioJQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'DomicilioJ', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DomicilioJQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DomicilioJQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DomicilioJQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DomicilioJQuery) {
            return $criteria;
        }
        $query = new DomicilioJQuery();
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
     * @return   DomicilioJ|DomicilioJ[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DomicilioJPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DomicilioJPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   DomicilioJ A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_DOMICILIO_J`, `BARRIO`, `CALLE`, `ALTURA`, `COD_POSTAL`, `REAL`, `LOCALIDAD_ID_LOCALIDAD`, `PJURIDICA_ID_PJURIDICA` FROM `domicilio_j` WHERE `ID_DOMICILIO_J` = :p0';
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
            $obj = new DomicilioJ();
            $obj->hydrate($row);
            DomicilioJPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DomicilioJ|DomicilioJ[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DomicilioJ[]|mixed the list of results, formatted by the current formatter
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
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DomicilioJPeer::ID_DOMICILIO_J, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DomicilioJPeer::ID_DOMICILIO_J, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_domicilio_j column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDomicilioJ(1234); // WHERE id_domicilio_j = 1234
     * $query->filterByIdDomicilioJ(array(12, 34)); // WHERE id_domicilio_j IN (12, 34)
     * $query->filterByIdDomicilioJ(array('min' => 12)); // WHERE id_domicilio_j > 12
     * </code>
     *
     * @param     mixed $idDomicilioJ The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByIdDomicilioJ($idDomicilioJ = null, $comparison = null)
    {
        if (is_array($idDomicilioJ) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DomicilioJPeer::ID_DOMICILIO_J, $idDomicilioJ, $comparison);
    }

    /**
     * Filter the query on the barrio column
     *
     * Example usage:
     * <code>
     * $query->filterByBarrio('fooValue');   // WHERE barrio = 'fooValue'
     * $query->filterByBarrio('%fooValue%'); // WHERE barrio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $barrio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByBarrio($barrio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($barrio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $barrio)) {
                $barrio = str_replace('*', '%', $barrio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::BARRIO, $barrio, $comparison);
    }

    /**
     * Filter the query on the calle column
     *
     * Example usage:
     * <code>
     * $query->filterByCalle('fooValue');   // WHERE calle = 'fooValue'
     * $query->filterByCalle('%fooValue%'); // WHERE calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByCalle($calle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calle)) {
                $calle = str_replace('*', '%', $calle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::CALLE, $calle, $comparison);
    }

    /**
     * Filter the query on the altura column
     *
     * Example usage:
     * <code>
     * $query->filterByAltura('fooValue');   // WHERE altura = 'fooValue'
     * $query->filterByAltura('%fooValue%'); // WHERE altura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $altura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByAltura($altura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($altura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $altura)) {
                $altura = str_replace('*', '%', $altura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::ALTURA, $altura, $comparison);
    }

    /**
     * Filter the query on the cod_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodPostal('fooValue');   // WHERE cod_postal = 'fooValue'
     * $query->filterByCodPostal('%fooValue%'); // WHERE cod_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codPostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByCodPostal($codPostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codPostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codPostal)) {
                $codPostal = str_replace('*', '%', $codPostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::COD_POSTAL, $codPostal, $comparison);
    }

    /**
     * Filter the query on the real column
     *
     * Example usage:
     * <code>
     * $query->filterByReal(true); // WHERE real = true
     * $query->filterByReal('yes'); // WHERE real = true
     * </code>
     *
     * @param     boolean|string $real The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByReal($real = null, $comparison = null)
    {
        if (is_string($real)) {
            $real = in_array(strtolower($real), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DomicilioJPeer::REAL, $real, $comparison);
    }

    /**
     * Filter the query on the localidad_id_localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidadIdLocalidad(1234); // WHERE localidad_id_localidad = 1234
     * $query->filterByLocalidadIdLocalidad(array(12, 34)); // WHERE localidad_id_localidad IN (12, 34)
     * $query->filterByLocalidadIdLocalidad(array('min' => 12)); // WHERE localidad_id_localidad > 12
     * </code>
     *
     * @see       filterByLocalidad()
     *
     * @param     mixed $localidadIdLocalidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByLocalidadIdLocalidad($localidadIdLocalidad = null, $comparison = null)
    {
        if (is_array($localidadIdLocalidad)) {
            $useMinMax = false;
            if (isset($localidadIdLocalidad['min'])) {
                $this->addUsingAlias(DomicilioJPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadIdLocalidad['max'])) {
                $this->addUsingAlias(DomicilioJPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad, $comparison);
    }

    /**
     * Filter the query on the pjuridica_id_pjuridica column
     *
     * Example usage:
     * <code>
     * $query->filterByPjuridicaIdPjuridica(1234); // WHERE pjuridica_id_pjuridica = 1234
     * $query->filterByPjuridicaIdPjuridica(array(12, 34)); // WHERE pjuridica_id_pjuridica IN (12, 34)
     * $query->filterByPjuridicaIdPjuridica(array('min' => 12)); // WHERE pjuridica_id_pjuridica > 12
     * </code>
     *
     * @see       filterByPjuridica()
     *
     * @param     mixed $pjuridicaIdPjuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function filterByPjuridicaIdPjuridica($pjuridicaIdPjuridica = null, $comparison = null)
    {
        if (is_array($pjuridicaIdPjuridica)) {
            $useMinMax = false;
            if (isset($pjuridicaIdPjuridica['min'])) {
                $this->addUsingAlias(DomicilioJPeer::PJURIDICA_ID_PJURIDICA, $pjuridicaIdPjuridica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pjuridicaIdPjuridica['max'])) {
                $this->addUsingAlias(DomicilioJPeer::PJURIDICA_ID_PJURIDICA, $pjuridicaIdPjuridica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DomicilioJPeer::PJURIDICA_ID_PJURIDICA, $pjuridicaIdPjuridica, $comparison);
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DomicilioJQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(DomicilioJPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->getIdLocalidad(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DomicilioJPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->toKeyValue('PrimaryKey', 'IdLocalidad'), $comparison);
        } else {
            throw new PropelException('filterByLocalidad() only accepts arguments of type Localidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Localidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function joinLocalidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Localidad');

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
            $this->addJoinObject($join, 'Localidad');
        }

        return $this;
    }

    /**
     * Use the Localidad relation Localidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocalidadQuery A secondary query class using the current class as primary query
     */
    public function useLocalidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocalidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Localidad', 'LocalidadQuery');
    }

    /**
     * Filter the query by a related Pjuridica object
     *
     * @param   Pjuridica|PropelObjectCollection $pjuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DomicilioJQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPjuridica($pjuridica, $comparison = null)
    {
        if ($pjuridica instanceof Pjuridica) {
            return $this
                ->addUsingAlias(DomicilioJPeer::PJURIDICA_ID_PJURIDICA, $pjuridica->getIdPjuridica(), $comparison);
        } elseif ($pjuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DomicilioJPeer::PJURIDICA_ID_PJURIDICA, $pjuridica->toKeyValue('PrimaryKey', 'IdPjuridica'), $comparison);
        } else {
            throw new PropelException('filterByPjuridica() only accepts arguments of type Pjuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pjuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function joinPjuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pjuridica');

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
            $this->addJoinObject($join, 'Pjuridica');
        }

        return $this;
    }

    /**
     * Use the Pjuridica relation Pjuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PjuridicaQuery A secondary query class using the current class as primary query
     */
    public function usePjuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPjuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pjuridica', 'PjuridicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   DomicilioJ $domicilioJ Object to remove from the list of results
     *
     * @return DomicilioJQuery The current query, for fluid interface
     */
    public function prune($domicilioJ = null)
    {
        if ($domicilioJ) {
            $this->addUsingAlias(DomicilioJPeer::ID_DOMICILIO_J, $domicilioJ->getIdDomicilioJ(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDomicilioJQuery