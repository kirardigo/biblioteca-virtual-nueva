<?php


/**
 * Base class that represents a query for the 'domicilio' table.
 *
 * 
 *
 * @method     DomicilioQuery orderByIdDomicilio($order = Criteria::ASC) Order by the id_domicilio column
 * @method     DomicilioQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     DomicilioQuery orderByAltura($order = Criteria::ASC) Order by the altura column
 * @method     DomicilioQuery orderByCodPostal($order = Criteria::ASC) Order by the cod_postal column
 * @method     DomicilioQuery orderByLocalidadIdLocalidad($order = Criteria::ASC) Order by the localidad_id_localidad column
 * @method     DomicilioQuery orderByPersonaIdPersona($order = Criteria::ASC) Order by the persona_id_persona column
 *
 * @method     DomicilioQuery groupByIdDomicilio() Group by the id_domicilio column
 * @method     DomicilioQuery groupByCalle() Group by the calle column
 * @method     DomicilioQuery groupByAltura() Group by the altura column
 * @method     DomicilioQuery groupByCodPostal() Group by the cod_postal column
 * @method     DomicilioQuery groupByLocalidadIdLocalidad() Group by the localidad_id_localidad column
 * @method     DomicilioQuery groupByPersonaIdPersona() Group by the persona_id_persona column
 *
 * @method     DomicilioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DomicilioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DomicilioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DomicilioQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     DomicilioQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     DomicilioQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     DomicilioQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     DomicilioQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     DomicilioQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     Domicilio findOne(PropelPDO $con = null) Return the first Domicilio matching the query
 * @method     Domicilio findOneOrCreate(PropelPDO $con = null) Return the first Domicilio matching the query, or a new Domicilio object populated from the query conditions when no match is found
 *
 * @method     Domicilio findOneByIdDomicilio(int $id_domicilio) Return the first Domicilio filtered by the id_domicilio column
 * @method     Domicilio findOneByCalle(string $calle) Return the first Domicilio filtered by the calle column
 * @method     Domicilio findOneByAltura(string $altura) Return the first Domicilio filtered by the altura column
 * @method     Domicilio findOneByCodPostal(string $cod_postal) Return the first Domicilio filtered by the cod_postal column
 * @method     Domicilio findOneByLocalidadIdLocalidad(int $localidad_id_localidad) Return the first Domicilio filtered by the localidad_id_localidad column
 * @method     Domicilio findOneByPersonaIdPersona(int $persona_id_persona) Return the first Domicilio filtered by the persona_id_persona column
 *
 * @method     array findByIdDomicilio(int $id_domicilio) Return Domicilio objects filtered by the id_domicilio column
 * @method     array findByCalle(string $calle) Return Domicilio objects filtered by the calle column
 * @method     array findByAltura(string $altura) Return Domicilio objects filtered by the altura column
 * @method     array findByCodPostal(string $cod_postal) Return Domicilio objects filtered by the cod_postal column
 * @method     array findByLocalidadIdLocalidad(int $localidad_id_localidad) Return Domicilio objects filtered by the localidad_id_localidad column
 * @method     array findByPersonaIdPersona(int $persona_id_persona) Return Domicilio objects filtered by the persona_id_persona column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDomicilioQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDomicilioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Domicilio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DomicilioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DomicilioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DomicilioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DomicilioQuery) {
            return $criteria;
        }
        $query = new DomicilioQuery();
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
     * @return   Domicilio|Domicilio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DomicilioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Domicilio A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_DOMICILIO`, `CALLE`, `ALTURA`, `COD_POSTAL`, `LOCALIDAD_ID_LOCALIDAD`, `PERSONA_ID_PERSONA` FROM `domicilio` WHERE `ID_DOMICILIO` = :p0';
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
            $obj = new Domicilio();
            $obj->hydrate($row);
            DomicilioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Domicilio|Domicilio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Domicilio[]|mixed the list of results, formatted by the current formatter
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
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DomicilioPeer::ID_DOMICILIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DomicilioPeer::ID_DOMICILIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_domicilio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDomicilio(1234); // WHERE id_domicilio = 1234
     * $query->filterByIdDomicilio(array(12, 34)); // WHERE id_domicilio IN (12, 34)
     * $query->filterByIdDomicilio(array('min' => 12)); // WHERE id_domicilio > 12
     * </code>
     *
     * @param     mixed $idDomicilio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function filterByIdDomicilio($idDomicilio = null, $comparison = null)
    {
        if (is_array($idDomicilio) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DomicilioPeer::ID_DOMICILIO, $idDomicilio, $comparison);
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
     * @return DomicilioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DomicilioPeer::CALLE, $calle, $comparison);
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
     * @return DomicilioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DomicilioPeer::ALTURA, $altura, $comparison);
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
     * @return DomicilioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DomicilioPeer::COD_POSTAL, $codPostal, $comparison);
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
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function filterByLocalidadIdLocalidad($localidadIdLocalidad = null, $comparison = null)
    {
        if (is_array($localidadIdLocalidad)) {
            $useMinMax = false;
            if (isset($localidadIdLocalidad['min'])) {
                $this->addUsingAlias(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadIdLocalidad['max'])) {
                $this->addUsingAlias(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad, $comparison);
    }

    /**
     * Filter the query on the persona_id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaIdPersona(1234); // WHERE persona_id_persona = 1234
     * $query->filterByPersonaIdPersona(array(12, 34)); // WHERE persona_id_persona IN (12, 34)
     * $query->filterByPersonaIdPersona(array('min' => 12)); // WHERE persona_id_persona > 12
     * </code>
     *
     * @see       filterByPersona()
     *
     * @param     mixed $personaIdPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function filterByPersonaIdPersona($personaIdPersona = null, $comparison = null)
    {
        if (is_array($personaIdPersona)) {
            $useMinMax = false;
            if (isset($personaIdPersona['min'])) {
                $this->addUsingAlias(DomicilioPeer::PERSONA_ID_PERSONA, $personaIdPersona['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaIdPersona['max'])) {
                $this->addUsingAlias(DomicilioPeer::PERSONA_ID_PERSONA, $personaIdPersona['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DomicilioPeer::PERSONA_ID_PERSONA, $personaIdPersona, $comparison);
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DomicilioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->getIdLocalidad(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->toKeyValue('PrimaryKey', 'IdLocalidad'), $comparison);
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
     * @return DomicilioQuery The current query, for fluid interface
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
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DomicilioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(DomicilioPeer::PERSONA_ID_PERSONA, $persona->getIdPersona(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DomicilioPeer::PERSONA_ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
        } else {
            throw new PropelException('filterByPersona() only accepts arguments of type Persona or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Persona relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function joinPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Persona');

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
            $this->addJoinObject($join, 'Persona');
        }

        return $this;
    }

    /**
     * Use the Persona relation Persona object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersona($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Persona', 'PersonaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Domicilio $domicilio Object to remove from the list of results
     *
     * @return DomicilioQuery The current query, for fluid interface
     */
    public function prune($domicilio = null)
    {
        if ($domicilio) {
            $this->addUsingAlias(DomicilioPeer::ID_DOMICILIO, $domicilio->getIdDomicilio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDomicilioQuery