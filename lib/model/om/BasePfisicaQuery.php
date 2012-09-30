<?php


/**
 * Base class that represents a query for the 'pfisica' table.
 *
 * 
 *
 * @method     PfisicaQuery orderByIdPfisica($order = Criteria::ASC) Order by the id_pfisica column
 * @method     PfisicaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PfisicaQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     PfisicaQuery orderByVaron($order = Criteria::ASC) Order by the varon column
 * @method     PfisicaQuery orderByFechaNac($order = Criteria::ASC) Order by the fecha_nac column
 * @method     PfisicaQuery orderByTipoDocIdTipoDoc($order = Criteria::ASC) Order by the tipo_doc_id_tipo_doc column
 * @method     PfisicaQuery orderByDocumento($order = Criteria::ASC) Order by the documento column
 *
 * @method     PfisicaQuery groupByIdPfisica() Group by the id_pfisica column
 * @method     PfisicaQuery groupByNombre() Group by the nombre column
 * @method     PfisicaQuery groupByApellido() Group by the apellido column
 * @method     PfisicaQuery groupByVaron() Group by the varon column
 * @method     PfisicaQuery groupByFechaNac() Group by the fecha_nac column
 * @method     PfisicaQuery groupByTipoDocIdTipoDoc() Group by the tipo_doc_id_tipo_doc column
 * @method     PfisicaQuery groupByDocumento() Group by the documento column
 *
 * @method     PfisicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PfisicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PfisicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PfisicaQuery leftJoinTipoDoc($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoDoc relation
 * @method     PfisicaQuery rightJoinTipoDoc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoDoc relation
 * @method     PfisicaQuery innerJoinTipoDoc($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoDoc relation
 *
 * @method     PfisicaQuery leftJoinCarreraFisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the CarreraFisica relation
 * @method     PfisicaQuery rightJoinCarreraFisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CarreraFisica relation
 * @method     PfisicaQuery innerJoinCarreraFisica($relationAlias = null) Adds a INNER JOIN clause to the query using the CarreraFisica relation
 *
 * @method     PfisicaQuery leftJoinDomicilio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Domicilio relation
 * @method     PfisicaQuery rightJoinDomicilio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Domicilio relation
 * @method     PfisicaQuery innerJoinDomicilio($relationAlias = null) Adds a INNER JOIN clause to the query using the Domicilio relation
 *
 * @method     PfisicaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     PfisicaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     PfisicaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Pfisica findOne(PropelPDO $con = null) Return the first Pfisica matching the query
 * @method     Pfisica findOneOrCreate(PropelPDO $con = null) Return the first Pfisica matching the query, or a new Pfisica object populated from the query conditions when no match is found
 *
 * @method     Pfisica findOneByIdPfisica(int $id_pfisica) Return the first Pfisica filtered by the id_pfisica column
 * @method     Pfisica findOneByNombre(string $nombre) Return the first Pfisica filtered by the nombre column
 * @method     Pfisica findOneByApellido(string $apellido) Return the first Pfisica filtered by the apellido column
 * @method     Pfisica findOneByVaron(boolean $varon) Return the first Pfisica filtered by the varon column
 * @method     Pfisica findOneByFechaNac(string $fecha_nac) Return the first Pfisica filtered by the fecha_nac column
 * @method     Pfisica findOneByTipoDocIdTipoDoc(int $tipo_doc_id_tipo_doc) Return the first Pfisica filtered by the tipo_doc_id_tipo_doc column
 * @method     Pfisica findOneByDocumento(string $documento) Return the first Pfisica filtered by the documento column
 *
 * @method     array findByIdPfisica(int $id_pfisica) Return Pfisica objects filtered by the id_pfisica column
 * @method     array findByNombre(string $nombre) Return Pfisica objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Pfisica objects filtered by the apellido column
 * @method     array findByVaron(boolean $varon) Return Pfisica objects filtered by the varon column
 * @method     array findByFechaNac(string $fecha_nac) Return Pfisica objects filtered by the fecha_nac column
 * @method     array findByTipoDocIdTipoDoc(int $tipo_doc_id_tipo_doc) Return Pfisica objects filtered by the tipo_doc_id_tipo_doc column
 * @method     array findByDocumento(string $documento) Return Pfisica objects filtered by the documento column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePfisicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePfisicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Pfisica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfisicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PfisicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfisicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfisicaQuery) {
            return $criteria;
        }
        $query = new PfisicaQuery();
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
     * @return   Pfisica|Pfisica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfisicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Pfisica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PFISICA`, `NOMBRE`, `APELLIDO`, `VARON`, `FECHA_NAC`, `TIPO_DOC_ID_TIPO_DOC`, `DOCUMENTO` FROM `pfisica` WHERE `ID_PFISICA` = :p0';
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
            $obj = new Pfisica();
            $obj->hydrate($row);
            PfisicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pfisica|Pfisica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pfisica[]|mixed the list of results, formatted by the current formatter
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
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfisicaPeer::ID_PFISICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfisicaPeer::ID_PFISICA, $keys, Criteria::IN);
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
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByIdPfisica($idPfisica = null, $comparison = null)
    {
        if (is_array($idPfisica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PfisicaPeer::ID_PFISICA, $idPfisica, $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfisicaPeer::NOMBRE, $nombre, $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfisicaPeer::APELLIDO, $apellido, $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByVaron($varon = null, $comparison = null)
    {
        if (is_string($varon)) {
            $varon = in_array(strtolower($varon), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PfisicaPeer::VARON, $varon, $comparison);
    }

    /**
     * Filter the query on the fecha_nac column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaNac('2011-03-14'); // WHERE fecha_nac = '2011-03-14'
     * $query->filterByFechaNac('now'); // WHERE fecha_nac = '2011-03-14'
     * $query->filterByFechaNac(array('max' => 'yesterday')); // WHERE fecha_nac > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaNac The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByFechaNac($fechaNac = null, $comparison = null)
    {
        if (is_array($fechaNac)) {
            $useMinMax = false;
            if (isset($fechaNac['min'])) {
                $this->addUsingAlias(PfisicaPeer::FECHA_NAC, $fechaNac['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaNac['max'])) {
                $this->addUsingAlias(PfisicaPeer::FECHA_NAC, $fechaNac['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfisicaPeer::FECHA_NAC, $fechaNac, $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function filterByTipoDocIdTipoDoc($tipoDocIdTipoDoc = null, $comparison = null)
    {
        if (is_array($tipoDocIdTipoDoc)) {
            $useMinMax = false;
            if (isset($tipoDocIdTipoDoc['min'])) {
                $this->addUsingAlias(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoDocIdTipoDoc['max'])) {
                $this->addUsingAlias(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDocIdTipoDoc, $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfisicaPeer::DOCUMENTO, $documento, $comparison);
    }

    /**
     * Filter the query by a related TipoDoc object
     *
     * @param   TipoDoc|PropelObjectCollection $tipoDoc The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PfisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoDoc($tipoDoc, $comparison = null)
    {
        if ($tipoDoc instanceof TipoDoc) {
            return $this
                ->addUsingAlias(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDoc->getIdTipoDoc(), $comparison);
        } elseif ($tipoDoc instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $tipoDoc->toKeyValue('PrimaryKey', 'IdTipoDoc'), $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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
     * Filter the query by a related CarreraFisica object
     *
     * @param   CarreraFisica|PropelObjectCollection $carreraFisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PfisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCarreraFisica($carreraFisica, $comparison = null)
    {
        if ($carreraFisica instanceof CarreraFisica) {
            return $this
                ->addUsingAlias(PfisicaPeer::ID_PFISICA, $carreraFisica->getPfisicaIdPfisica(), $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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
     * Filter the query by a related Domicilio object
     *
     * @param   Domicilio|PropelObjectCollection $domicilio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PfisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDomicilio($domicilio, $comparison = null)
    {
        if ($domicilio instanceof Domicilio) {
            return $this
                ->addUsingAlias(PfisicaPeer::ID_PFISICA, $domicilio->getPfisicaIdPfisica(), $comparison);
        } elseif ($domicilio instanceof PropelObjectCollection) {
            return $this
                ->useDomicilioQuery()
                ->filterByPrimaryKeys($domicilio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDomicilio() only accepts arguments of type Domicilio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Domicilio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function joinDomicilio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Domicilio');

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
            $this->addJoinObject($join, 'Domicilio');
        }

        return $this;
    }

    /**
     * Use the Domicilio relation Domicilio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DomicilioQuery A secondary query class using the current class as primary query
     */
    public function useDomicilioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDomicilio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Domicilio', 'DomicilioQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PfisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PfisicaPeer::ID_PFISICA, $usuario->getIdUsuario(), $comparison);
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
     * @return PfisicaQuery The current query, for fluid interface
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
     * @param   Pfisica $pfisica Object to remove from the list of results
     *
     * @return PfisicaQuery The current query, for fluid interface
     */
    public function prune($pfisica = null)
    {
        if ($pfisica) {
            $this->addUsingAlias(PfisicaPeer::ID_PFISICA, $pfisica->getIdPfisica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePfisicaQuery