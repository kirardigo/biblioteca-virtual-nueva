<?php


/**
 * Base class that represents a query for the 'fisica' table.
 *
 * 
 *
 * @method     FisicaQuery orderByIdPfisica($order = Criteria::ASC) Order by the id_pfisica column
 * @method     FisicaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     FisicaQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     FisicaQuery orderByVaron($order = Criteria::ASC) Order by the varon column
 * @method     FisicaQuery orderByFechaNac($order = Criteria::ASC) Order by the fecha_nac column
 * @method     FisicaQuery orderByTipoDocIdTipoDoc($order = Criteria::ASC) Order by the tipo_doc_id_tipo_doc column
 * @method     FisicaQuery orderByDocumento($order = Criteria::ASC) Order by the documento column
 * @method     FisicaQuery orderByPersonaIdPersona($order = Criteria::ASC) Order by the persona_id_persona column
 *
 * @method     FisicaQuery groupByIdPfisica() Group by the id_pfisica column
 * @method     FisicaQuery groupByNombre() Group by the nombre column
 * @method     FisicaQuery groupByApellido() Group by the apellido column
 * @method     FisicaQuery groupByVaron() Group by the varon column
 * @method     FisicaQuery groupByFechaNac() Group by the fecha_nac column
 * @method     FisicaQuery groupByTipoDocIdTipoDoc() Group by the tipo_doc_id_tipo_doc column
 * @method     FisicaQuery groupByDocumento() Group by the documento column
 * @method     FisicaQuery groupByPersonaIdPersona() Group by the persona_id_persona column
 *
 * @method     FisicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FisicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FisicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FisicaQuery leftJoinTipoDoc($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoDoc relation
 * @method     FisicaQuery rightJoinTipoDoc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoDoc relation
 * @method     FisicaQuery innerJoinTipoDoc($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoDoc relation
 *
 * @method     FisicaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     FisicaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     FisicaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     FisicaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     FisicaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     FisicaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Fisica findOne(PropelPDO $con = null) Return the first Fisica matching the query
 * @method     Fisica findOneOrCreate(PropelPDO $con = null) Return the first Fisica matching the query, or a new Fisica object populated from the query conditions when no match is found
 *
 * @method     Fisica findOneByIdPfisica(int $id_pfisica) Return the first Fisica filtered by the id_pfisica column
 * @method     Fisica findOneByNombre(string $nombre) Return the first Fisica filtered by the nombre column
 * @method     Fisica findOneByApellido(string $apellido) Return the first Fisica filtered by the apellido column
 * @method     Fisica findOneByVaron(boolean $varon) Return the first Fisica filtered by the varon column
 * @method     Fisica findOneByFechaNac(string $fecha_nac) Return the first Fisica filtered by the fecha_nac column
 * @method     Fisica findOneByTipoDocIdTipoDoc(int $tipo_doc_id_tipo_doc) Return the first Fisica filtered by the tipo_doc_id_tipo_doc column
 * @method     Fisica findOneByDocumento(string $documento) Return the first Fisica filtered by the documento column
 * @method     Fisica findOneByPersonaIdPersona(int $persona_id_persona) Return the first Fisica filtered by the persona_id_persona column
 *
 * @method     array findByIdPfisica(int $id_pfisica) Return Fisica objects filtered by the id_pfisica column
 * @method     array findByNombre(string $nombre) Return Fisica objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Fisica objects filtered by the apellido column
 * @method     array findByVaron(boolean $varon) Return Fisica objects filtered by the varon column
 * @method     array findByFechaNac(string $fecha_nac) Return Fisica objects filtered by the fecha_nac column
 * @method     array findByTipoDocIdTipoDoc(int $tipo_doc_id_tipo_doc) Return Fisica objects filtered by the tipo_doc_id_tipo_doc column
 * @method     array findByDocumento(string $documento) Return Fisica objects filtered by the documento column
 * @method     array findByPersonaIdPersona(int $persona_id_persona) Return Fisica objects filtered by the persona_id_persona column
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
        $sql = 'SELECT `ID_PFISICA`, `NOMBRE`, `APELLIDO`, `VARON`, `FECHA_NAC`, `TIPO_DOC_ID_TIPO_DOC`, `DOCUMENTO`, `PERSONA_ID_PERSONA` FROM `fisica` WHERE `ID_PFISICA` = :p0';
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

        return $this->addUsingAlias(FisicaPeer::ID_PFISICA, $key, Criteria::EQUAL);
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

        return $this->addUsingAlias(FisicaPeer::ID_PFISICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_pfisica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPfisica(1234); // WHERE id_pfisica = 1234
     * $query->filterByIdPfisica(array(12, 34)); // WHERE id_pfisica IN (12, 34)
     * $query->filterByIdPfisica(array('min' => 12)); // WHERE id_pfisica > 12
     * </code>
     *
     * @param     mixed $idPfisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByIdPfisica($idPfisica = null, $comparison = null)
    {
        if (is_array($idPfisica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(FisicaPeer::ID_PFISICA, $idPfisica, $comparison);
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
     * Filter the query on the varon column
     *
     * Example usage:
     * <code>
     * $query->filterByVaron(true); // WHERE varon = true
     * $query->filterByVaron('yes'); // WHERE varon = true
     * </code>
     *
     * @param     boolean|string $varon The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByVaron($varon = null, $comparison = null)
    {
        if (is_string($varon)) {
            $varon = in_array(strtolower($varon), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FisicaPeer::VARON, $varon, $comparison);
    }

    /**
     * Filter the query on the fecha_nac column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaNac('fooValue');   // WHERE fecha_nac = 'fooValue'
     * $query->filterByFechaNac('%fooValue%'); // WHERE fecha_nac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fechaNac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByFechaNac($fechaNac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fechaNac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fechaNac)) {
                $fechaNac = str_replace('*', '%', $fechaNac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::FECHA_NAC, $fechaNac, $comparison);
    }

    /**
     * Filter the query on the tipo_doc_id_tipo_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoDocIdTipoDoc(1234); // WHERE tipo_doc_id_tipo_doc = 1234
     * $query->filterByTipoDocIdTipoDoc(array(12, 34)); // WHERE tipo_doc_id_tipo_doc IN (12, 34)
     * $query->filterByTipoDocIdTipoDoc(array('min' => 12)); // WHERE tipo_doc_id_tipo_doc > 12
     * </code>
     *
     * @see       filterByTipoDoc()
     *
     * @param     mixed $tipoDocIdTipoDoc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByTipoDocIdTipoDoc($tipoDocIdTipoDoc = null, $comparison = null)
    {
        if (is_array($tipoDocIdTipoDoc)) {
            $useMinMax = false;
            if (isset($tipoDocIdTipoDoc['min'])) {
                $this->addUsingAlias(FisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoDocIdTipoDoc['max'])) {
                $this->addUsingAlias(FisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc, $comparison);
    }

    /**
     * Filter the query on the documento column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumento('fooValue');   // WHERE documento = 'fooValue'
     * $query->filterByDocumento('%fooValue%'); // WHERE documento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByDocumento($documento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documento)) {
                $documento = str_replace('*', '%', $documento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FisicaPeer::DOCUMENTO, $documento, $comparison);
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
     * @return FisicaQuery The current query, for fluid interface
     */
    public function filterByPersonaIdPersona($personaIdPersona = null, $comparison = null)
    {
        if (is_array($personaIdPersona)) {
            $useMinMax = false;
            if (isset($personaIdPersona['min'])) {
                $this->addUsingAlias(FisicaPeer::PERSONA_ID_PERSONA, $personaIdPersona['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaIdPersona['max'])) {
                $this->addUsingAlias(FisicaPeer::PERSONA_ID_PERSONA, $personaIdPersona['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FisicaPeer::PERSONA_ID_PERSONA, $personaIdPersona, $comparison);
    }

    /**
     * Filter the query by a related TipoDoc object
     *
     * @param   TipoDoc|PropelObjectCollection $tipoDoc The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoDoc($tipoDoc, $comparison = null)
    {
        if ($tipoDoc instanceof TipoDoc) {
            return $this
                ->addUsingAlias(FisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDoc->getIdTipoDoc(), $comparison);
        } elseif ($tipoDoc instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDoc->toKeyValue('PrimaryKey', 'IdTipoDoc'), $comparison);
        } else {
            throw new PropelException('filterByTipoDoc() only accepts arguments of type TipoDoc or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoDoc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function joinTipoDoc($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoDoc');

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
            $this->addJoinObject($join, 'TipoDoc');
        }

        return $this;
    }

    /**
     * Use the TipoDoc relation TipoDoc object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoDocQuery A secondary query class using the current class as primary query
     */
    public function useTipoDocQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoDoc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoDoc', 'TipoDocQuery');
    }

    /**
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(FisicaPeer::PERSONA_ID_PERSONA, $persona->getIdPersona(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FisicaPeer::PERSONA_ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
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
     * @return FisicaQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   FisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(FisicaPeer::ID_PFISICA, $usuario->getFisicaIdPfisica(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioQuery()
                ->filterByPrimaryKeys($usuario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FisicaQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
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
            $this->addUsingAlias(FisicaPeer::ID_PFISICA, $fisica->getIdPfisica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseFisicaQuery