<?php


/**
 * Base class that represents a query for the 'anuncio' table.
 *
 * 
 *
 * @method     AnuncioQuery orderByIdAnuncio($order = Criteria::ASC) Order by the id_anuncio column
 * @method     AnuncioQuery orderByArchivo($order = Criteria::ASC) Order by the archivo column
 * @method     AnuncioQuery orderByInformacion($order = Criteria::ASC) Order by the informacion column
 * @method     AnuncioQuery orderByFechaAnuncio($order = Criteria::ASC) Order by the fecha_anuncio column
 * @method     AnuncioQuery orderByUsuarioIdUsuario($order = Criteria::ASC) Order by the usuario_id_usuario column
 *
 * @method     AnuncioQuery groupByIdAnuncio() Group by the id_anuncio column
 * @method     AnuncioQuery groupByArchivo() Group by the archivo column
 * @method     AnuncioQuery groupByInformacion() Group by the informacion column
 * @method     AnuncioQuery groupByFechaAnuncio() Group by the fecha_anuncio column
 * @method     AnuncioQuery groupByUsuarioIdUsuario() Group by the usuario_id_usuario column
 *
 * @method     AnuncioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AnuncioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AnuncioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AnuncioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method     AnuncioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method     AnuncioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method     Anuncio findOne(PropelPDO $con = null) Return the first Anuncio matching the query
 * @method     Anuncio findOneOrCreate(PropelPDO $con = null) Return the first Anuncio matching the query, or a new Anuncio object populated from the query conditions when no match is found
 *
 * @method     Anuncio findOneByIdAnuncio(int $id_anuncio) Return the first Anuncio filtered by the id_anuncio column
 * @method     Anuncio findOneByArchivo(string $archivo) Return the first Anuncio filtered by the archivo column
 * @method     Anuncio findOneByInformacion(string $informacion) Return the first Anuncio filtered by the informacion column
 * @method     Anuncio findOneByFechaAnuncio(string $fecha_anuncio) Return the first Anuncio filtered by the fecha_anuncio column
 * @method     Anuncio findOneByUsuarioIdUsuario(int $usuario_id_usuario) Return the first Anuncio filtered by the usuario_id_usuario column
 *
 * @method     array findByIdAnuncio(int $id_anuncio) Return Anuncio objects filtered by the id_anuncio column
 * @method     array findByArchivo(string $archivo) Return Anuncio objects filtered by the archivo column
 * @method     array findByInformacion(string $informacion) Return Anuncio objects filtered by the informacion column
 * @method     array findByFechaAnuncio(string $fecha_anuncio) Return Anuncio objects filtered by the fecha_anuncio column
 * @method     array findByUsuarioIdUsuario(int $usuario_id_usuario) Return Anuncio objects filtered by the usuario_id_usuario column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAnuncioQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAnuncioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Anuncio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AnuncioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AnuncioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AnuncioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AnuncioQuery) {
            return $criteria;
        }
        $query = new AnuncioQuery();
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
     * @return   Anuncio|Anuncio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AnuncioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AnuncioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Anuncio A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ANUNCIO`, `ARCHIVO`, `INFORMACION`, `FECHA_ANUNCIO`, `USUARIO_ID_USUARIO` FROM `anuncio` WHERE `ID_ANUNCIO` = :p0';
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
            $obj = new Anuncio();
            $obj->hydrate($row);
            AnuncioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Anuncio|Anuncio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Anuncio[]|mixed the list of results, formatted by the current formatter
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
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AnuncioPeer::ID_ANUNCIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AnuncioPeer::ID_ANUNCIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_anuncio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAnuncio(1234); // WHERE id_anuncio = 1234
     * $query->filterByIdAnuncio(array(12, 34)); // WHERE id_anuncio IN (12, 34)
     * $query->filterByIdAnuncio(array('min' => 12)); // WHERE id_anuncio > 12
     * </code>
     *
     * @param     mixed $idAnuncio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function filterByIdAnuncio($idAnuncio = null, $comparison = null)
    {
        if (is_array($idAnuncio) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AnuncioPeer::ID_ANUNCIO, $idAnuncio, $comparison);
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
     * @return AnuncioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AnuncioPeer::ARCHIVO, $archivo, $comparison);
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
     * @return AnuncioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AnuncioPeer::INFORMACION, $informacion, $comparison);
    }

    /**
     * Filter the query on the fecha_anuncio column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaAnuncio('2011-03-14'); // WHERE fecha_anuncio = '2011-03-14'
     * $query->filterByFechaAnuncio('now'); // WHERE fecha_anuncio = '2011-03-14'
     * $query->filterByFechaAnuncio(array('max' => 'yesterday')); // WHERE fecha_anuncio > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaAnuncio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function filterByFechaAnuncio($fechaAnuncio = null, $comparison = null)
    {
        if (is_array($fechaAnuncio)) {
            $useMinMax = false;
            if (isset($fechaAnuncio['min'])) {
                $this->addUsingAlias(AnuncioPeer::FECHA_ANUNCIO, $fechaAnuncio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaAnuncio['max'])) {
                $this->addUsingAlias(AnuncioPeer::FECHA_ANUNCIO, $fechaAnuncio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AnuncioPeer::FECHA_ANUNCIO, $fechaAnuncio, $comparison);
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
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function filterByUsuarioIdUsuario($usuarioIdUsuario = null, $comparison = null)
    {
        if (is_array($usuarioIdUsuario)) {
            $useMinMax = false;
            if (isset($usuarioIdUsuario['min'])) {
                $this->addUsingAlias(AnuncioPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioIdUsuario['max'])) {
                $this->addUsingAlias(AnuncioPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AnuncioPeer::USUARIO_ID_USUARIO, $usuarioIdUsuario, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AnuncioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AnuncioPeer::USUARIO_ID_USUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AnuncioPeer::USUARIO_ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return AnuncioQuery The current query, for fluid interface
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
     * @param   Anuncio $anuncio Object to remove from the list of results
     *
     * @return AnuncioQuery The current query, for fluid interface
     */
    public function prune($anuncio = null)
    {
        if ($anuncio) {
            $this->addUsingAlias(AnuncioPeer::ID_ANUNCIO, $anuncio->getIdAnuncio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAnuncioQuery