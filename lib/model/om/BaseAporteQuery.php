<?php


/**
 * Base class that represents a query for the 'aporte' table.
 *
 * 
 *
 * @method     AporteQuery orderByIdAporte($order = Criteria::ASC) Order by the id_aporte column
 * @method     AporteQuery orderByArchivo($order = Criteria::ASC) Order by the archivo column
 * @method     AporteQuery orderByTitulo($order = Criteria::ASC) Order by the titulo column
 * @method     AporteQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     AporteQuery orderByUsuarioIdUsuario($order = Criteria::ASC) Order by the usuario_id_usuario column
 *
 * @method     AporteQuery groupByIdAporte() Group by the id_aporte column
 * @method     AporteQuery groupByArchivo() Group by the archivo column
 * @method     AporteQuery groupByTitulo() Group by the titulo column
 * @method     AporteQuery groupByDescripcion() Group by the descripcion column
 * @method     AporteQuery groupByUsuarioIdUsuario() Group by the usuario_id_usuario column
 *
 * @method     AporteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AporteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AporteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AporteQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     AporteQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     AporteQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     AporteQuery leftJoinMaterialAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the MaterialAporte relation
 * @method     AporteQuery rightJoinMaterialAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MaterialAporte relation
 * @method     AporteQuery innerJoinMaterialAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the MaterialAporte relation
 *
 * @method     Aporte findOne(PropelPDO $con = null) Return the first Aporte matching the query
 * @method     Aporte findOneOrCreate(PropelPDO $con = null) Return the first Aporte matching the query, or a new Aporte object populated from the query conditions when no match is found
 *
 * @method     Aporte findOneByIdAporte(int $id_aporte) Return the first Aporte filtered by the id_aporte column
 * @method     Aporte findOneByArchivo(string $archivo) Return the first Aporte filtered by the archivo column
 * @method     Aporte findOneByTitulo(string $titulo) Return the first Aporte filtered by the titulo column
 * @method     Aporte findOneByDescripcion(string $descripcion) Return the first Aporte filtered by the descripcion column
 * @method     Aporte findOneByUsuarioIdUsuario(int $usuario_id_usuario) Return the first Aporte filtered by the usuario_id_usuario column
 *
 * @method     array findByIdAporte(int $id_aporte) Return Aporte objects filtered by the id_aporte column
 * @method     array findByArchivo(string $archivo) Return Aporte objects filtered by the archivo column
 * @method     array findByTitulo(string $titulo) Return Aporte objects filtered by the titulo column
 * @method     array findByDescripcion(string $descripcion) Return Aporte objects filtered by the descripcion column
 * @method     array findByUsuarioIdUsuario(int $usuario_id_usuario) Return Aporte objects filtered by the usuario_id_usuario column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAporteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAporteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Aporte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AporteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AporteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AporteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AporteQuery) {
            return $criteria;
        }
        $query = new AporteQuery();
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
     * @return   Aporte|Aporte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AportePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AportePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Aporte A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_APORTE`, `ARCHIVO`, `TITULO`, `DESCRIPCION`, `USUARIO_ID_USUARIO` FROM `aporte` WHERE `ID_APORTE` = :p0';
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
            $obj = new Aporte();
            $obj->hydrate($row);
            AportePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aporte|Aporte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aporte[]|mixed the list of results, formatted by the current formatter
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
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AportePeer::ID_APORTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AportePeer::ID_APORTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAporte(1234); // WHERE id_aporte = 1234
     * $query->filterByIdAporte(array(12, 34)); // WHERE id_aporte IN (12, 34)
     * $query->filterByIdAporte(array('min' => 12)); // WHERE id_aporte > 12
     * </code>
     *
     * @param     mixed $idAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByIdAporte($idAporte = null, $comparison = null)
    {
        if (is_array($idAporte) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AportePeer::ID_APORTE, $idAporte, $comparison);
    }

    /**
     * Filter the query on the archivo column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivo('fooValue');   // WHERE archivo = 'fooValue'
     * $query->filterByArchivo('%fooValue%'); // WHERE archivo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archivo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByArchivo($archivo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archivo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $archivo)) {
                $archivo = str_replace('*', '%', $archivo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AportePeer::ARCHIVO, $archivo, $comparison);
    }

    /**
     * Filter the query on the titulo column
     *
     * Example usage:
     * <code>
     * $query->filterByTitulo('fooValue');   // WHERE titulo = 'fooValue'
     * $query->filterByTitulo('%fooValue%'); // WHERE titulo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titulo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByTitulo($titulo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titulo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titulo)) {
                $titulo = str_replace('*', '%', $titulo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AportePeer::TITULO, $titulo, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AportePeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the usuario_id_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioIdUsuario(1234); // WHERE usuario_id_usuario = 1234
     * $query->filterByUsuarioIdUsuario(array(12, 34)); // WHERE usuario_id_usuario IN (12, 34)
     * $query->filterByUsuarioIdUsuario(array('min' => 12)); // WHERE usuario_id_usuario > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $usuarioIdUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByUsuarioIdUsuario($usuarioIdUsuario = null, $comparison = null)
    {
        if (is_array($usuarioIdUsuario)) {
            $useMinMax = false;
            if (isset($usuarioIdUsuario['min'])) {
                $this->addUsingAlias(AportePeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioIdUsuario['max'])) {
                $this->addUsingAlias(AportePeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AportePeer::USUARIO_ID_USUARIO, $usuarioIdUsuario, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AportePeer::USUARIO_ID_USUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AportePeer::USUARIO_ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return AporteQuery The current query, for fluid interface
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
     * Filter the query by a related MaterialAporte object
     *
     * @param   MaterialAporte|PropelObjectCollection $materialAporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterialAporte($materialAporte, $comparison = null)
    {
        if ($materialAporte instanceof MaterialAporte) {
            return $this
                ->addUsingAlias(AportePeer::ID_APORTE, $materialAporte->getAporteIdAporte(), $comparison);
        } elseif ($materialAporte instanceof PropelObjectCollection) {
            return $this
                ->useMaterialAporteQuery()
                ->filterByPrimaryKeys($materialAporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMaterialAporte() only accepts arguments of type MaterialAporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MaterialAporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function joinMaterialAporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MaterialAporte');

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
            $this->addJoinObject($join, 'MaterialAporte');
        }

        return $this;
    }

    /**
     * Use the MaterialAporte relation MaterialAporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MaterialAporteQuery A secondary query class using the current class as primary query
     */
    public function useMaterialAporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMaterialAporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MaterialAporte', 'MaterialAporteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Aporte $aporte Object to remove from the list of results
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function prune($aporte = null)
    {
        if ($aporte) {
            $this->addUsingAlias(AportePeer::ID_APORTE, $aporte->getIdAporte(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAporteQuery