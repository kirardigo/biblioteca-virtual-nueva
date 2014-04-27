<?php


/**
 * Base class that represents a query for the 'lista' table.
 *
 * 
 *
 * @method     ListaQuery orderByIdLista($order = Criteria::ASC) Order by the id_lista column
 * @method     ListaQuery orderByInformacion($order = Criteria::ASC) Order by the informacion column
 * @method     ListaQuery orderByMaterialIdMaterial($order = Criteria::ASC) Order by the material_id_material column
 * @method     ListaQuery orderByUsuarioIdUsuario($order = Criteria::ASC) Order by the usuario_id_usuario column
 *
 * @method     ListaQuery groupByIdLista() Group by the id_lista column
 * @method     ListaQuery groupByInformacion() Group by the informacion column
 * @method     ListaQuery groupByMaterialIdMaterial() Group by the material_id_material column
 * @method     ListaQuery groupByUsuarioIdUsuario() Group by the usuario_id_usuario column
 *
 * @method     ListaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ListaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ListaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ListaQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method     ListaQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method     ListaQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method     ListaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     ListaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     ListaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Lista findOne(PropelPDO $con = null) Return the first Lista matching the query
 * @method     Lista findOneOrCreate(PropelPDO $con = null) Return the first Lista matching the query, or a new Lista object populated from the query conditions when no match is found
 *
 * @method     Lista findOneByIdLista(int $id_lista) Return the first Lista filtered by the id_lista column
 * @method     Lista findOneByInformacion(string $informacion) Return the first Lista filtered by the informacion column
 * @method     Lista findOneByMaterialIdMaterial(int $material_id_material) Return the first Lista filtered by the material_id_material column
 * @method     Lista findOneByUsuarioIdUsuario(int $usuario_id_usuario) Return the first Lista filtered by the usuario_id_usuario column
 *
 * @method     array findByIdLista(int $id_lista) Return Lista objects filtered by the id_lista column
 * @method     array findByInformacion(string $informacion) Return Lista objects filtered by the informacion column
 * @method     array findByMaterialIdMaterial(int $material_id_material) Return Lista objects filtered by the material_id_material column
 * @method     array findByUsuarioIdUsuario(int $usuario_id_usuario) Return Lista objects filtered by the usuario_id_usuario column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseListaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseListaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Lista', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ListaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ListaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ListaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ListaQuery) {
            return $criteria;
        }
        $query = new ListaQuery();
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
     * @return   Lista|Lista[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ListaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ListaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Lista A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_LISTA`, `INFORMACION`, `MATERIAL_ID_MATERIAL`, `USUARIO_ID_USUARIO` FROM `lista` WHERE `ID_LISTA` = :p0';
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
            $obj = new Lista();
            $obj->hydrate($row);
            ListaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Lista|Lista[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Lista[]|mixed the list of results, formatted by the current formatter
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
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ListaPeer::ID_LISTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ListaPeer::ID_LISTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_lista column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLista(1234); // WHERE id_lista = 1234
     * $query->filterByIdLista(array(12, 34)); // WHERE id_lista IN (12, 34)
     * $query->filterByIdLista(array('min' => 12)); // WHERE id_lista > 12
     * </code>
     *
     * @param     mixed $idLista The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByIdLista($idLista = null, $comparison = null)
    {
        if (is_array($idLista) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ListaPeer::ID_LISTA, $idLista, $comparison);
    }

    /**
     * Filter the query on the informacion column
     *
     * Example usage:
     * <code>
     * $query->filterByInformacion('fooValue');   // WHERE informacion = 'fooValue'
     * $query->filterByInformacion('%fooValue%'); // WHERE informacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $informacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByInformacion($informacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($informacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $informacion)) {
                $informacion = str_replace('*', '%', $informacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ListaPeer::INFORMACION, $informacion, $comparison);
    }

    /**
     * Filter the query on the material_id_material column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialIdMaterial(1234); // WHERE material_id_material = 1234
     * $query->filterByMaterialIdMaterial(array(12, 34)); // WHERE material_id_material IN (12, 34)
     * $query->filterByMaterialIdMaterial(array('min' => 12)); // WHERE material_id_material > 12
     * </code>
     *
     * @see       filterByMaterial()
     *
     * @param     mixed $materialIdMaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByMaterialIdMaterial($materialIdMaterial = null, $comparison = null)
    {
        if (is_array($materialIdMaterial)) {
            $useMinMax = false;
            if (isset($materialIdMaterial['min'])) {
                $this->addUsingAlias(ListaPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($materialIdMaterial['max'])) {
                $this->addUsingAlias(ListaPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ListaPeer::MATERIAL_ID_MATERIAL, $materialIdMaterial, $comparison);
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
     * @return ListaQuery The current query, for fluid interface
     */
    public function filterByUsuarioIdUsuario($usuarioIdUsuario = null, $comparison = null)
    {
        if (is_array($usuarioIdUsuario)) {
            $useMinMax = false;
            if (isset($usuarioIdUsuario['min'])) {
                $this->addUsingAlias(ListaPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioIdUsuario['max'])) {
                $this->addUsingAlias(ListaPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ListaPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario, $comparison);
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ListaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(ListaPeer::MATERIAL_ID_MATERIAL, $material->getIdMaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ListaPeer::MATERIAL_ID_MATERIAL, $material->toKeyValue('PrimaryKey', 'IdMaterial'), $comparison);
        } else {
            throw new PropelException('filterByMaterial() only accepts arguments of type Material or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Material relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function joinMaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Material');

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
            $this->addJoinObject($join, 'Material');
        }

        return $this;
    }

    /**
     * Use the Material relation Material object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MaterialQuery A secondary query class using the current class as primary query
     */
    public function useMaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Material', 'MaterialQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ListaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(ListaPeer::USUARIO_ID_USUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ListaPeer::USUARIO_ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return ListaQuery The current query, for fluid interface
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
     * @param   Lista $lista Object to remove from the list of results
     *
     * @return ListaQuery The current query, for fluid interface
     */
    public function prune($lista = null)
    {
        if ($lista) {
            $this->addUsingAlias(ListaPeer::ID_LISTA, $lista->getIdLista(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseListaQuery