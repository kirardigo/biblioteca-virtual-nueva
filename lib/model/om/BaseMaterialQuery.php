<?php


/**
 * Base class that represents a query for the 'material' table.
 *
 * 
 *
 * @method     MaterialQuery orderByIdMaterial($order = Criteria::ASC) Order by the id_material column
 * @method     MaterialQuery orderByArchivo($order = Criteria::ASC) Order by the archivo column
 * @method     MaterialQuery orderByTitulo($order = Criteria::ASC) Order by the titulo column
 * @method     MaterialQuery orderByEditorial($order = Criteria::ASC) Order by the editorial column
 * @method     MaterialQuery orderByAutor($order = Criteria::ASC) Order by the autor column
 * @method     MaterialQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     MaterialQuery orderByFisico($order = Criteria::ASC) Order by the fisico column
 * @method     MaterialQuery orderByTemaIdTema($order = Criteria::ASC) Order by the tema_id_tema column
 * @method     MaterialQuery orderByBibliotecaIdBiblioteca($order = Criteria::ASC) Order by the biblioteca_id_biblioteca column
 *
 * @method     MaterialQuery groupByIdMaterial() Group by the id_material column
 * @method     MaterialQuery groupByArchivo() Group by the archivo column
 * @method     MaterialQuery groupByTitulo() Group by the titulo column
 * @method     MaterialQuery groupByEditorial() Group by the editorial column
 * @method     MaterialQuery groupByAutor() Group by the autor column
 * @method     MaterialQuery groupByDescripcion() Group by the descripcion column
 * @method     MaterialQuery groupByFisico() Group by the fisico column
 * @method     MaterialQuery groupByTemaIdTema() Group by the tema_id_tema column
 * @method     MaterialQuery groupByBibliotecaIdBiblioteca() Group by the biblioteca_id_biblioteca column
 *
 * @method     MaterialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MaterialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MaterialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MaterialQuery leftJoinTema($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tema relation
 * @method     MaterialQuery rightJoinTema($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tema relation
 * @method     MaterialQuery innerJoinTema($relationAlias = null) Adds a INNER JOIN clause to the query using the Tema relation
 *
 * @method     MaterialQuery leftJoinBiblioteca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Biblioteca relation
 * @method     MaterialQuery rightJoinBiblioteca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Biblioteca relation
 * @method     MaterialQuery innerJoinBiblioteca($relationAlias = null) Adds a INNER JOIN clause to the query using the Biblioteca relation
 *
 * @method     MaterialQuery leftJoinAccesoMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the AccesoMaterial relation
 * @method     MaterialQuery rightJoinAccesoMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AccesoMaterial relation
 * @method     MaterialQuery innerJoinAccesoMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the AccesoMaterial relation
 *
 * @method     MaterialQuery leftJoinLista($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lista relation
 * @method     MaterialQuery rightJoinLista($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lista relation
 * @method     MaterialQuery innerJoinLista($relationAlias = null) Adds a INNER JOIN clause to the query using the Lista relation
 *
 * @method     MaterialQuery leftJoinMaterialAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the MaterialAporte relation
 * @method     MaterialQuery rightJoinMaterialAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MaterialAporte relation
 * @method     MaterialQuery innerJoinMaterialAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the MaterialAporte relation
 *
 * @method     MaterialQuery leftJoinMaterialCarrera($relationAlias = null) Adds a LEFT JOIN clause to the query using the MaterialCarrera relation
 * @method     MaterialQuery rightJoinMaterialCarrera($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MaterialCarrera relation
 * @method     MaterialQuery innerJoinMaterialCarrera($relationAlias = null) Adds a INNER JOIN clause to the query using the MaterialCarrera relation
 *
 * @method     Material findOne(PropelPDO $con = null) Return the first Material matching the query
 * @method     Material findOneOrCreate(PropelPDO $con = null) Return the first Material matching the query, or a new Material object populated from the query conditions when no match is found
 *
 * @method     Material findOneByIdMaterial(int $id_material) Return the first Material filtered by the id_material column
 * @method     Material findOneByArchivo(string $archivo) Return the first Material filtered by the archivo column
 * @method     Material findOneByTitulo(string $titulo) Return the first Material filtered by the titulo column
 * @method     Material findOneByEditorial(string $editorial) Return the first Material filtered by the editorial column
 * @method     Material findOneByAutor(string $autor) Return the first Material filtered by the autor column
 * @method     Material findOneByDescripcion(string $descripcion) Return the first Material filtered by the descripcion column
 * @method     Material findOneByFisico(boolean $fisico) Return the first Material filtered by the fisico column
 * @method     Material findOneByTemaIdTema(int $tema_id_tema) Return the first Material filtered by the tema_id_tema column
 * @method     Material findOneByBibliotecaIdBiblioteca(int $biblioteca_id_biblioteca) Return the first Material filtered by the biblioteca_id_biblioteca column
 *
 * @method     array findByIdMaterial(int $id_material) Return Material objects filtered by the id_material column
 * @method     array findByArchivo(string $archivo) Return Material objects filtered by the archivo column
 * @method     array findByTitulo(string $titulo) Return Material objects filtered by the titulo column
 * @method     array findByEditorial(string $editorial) Return Material objects filtered by the editorial column
 * @method     array findByAutor(string $autor) Return Material objects filtered by the autor column
 * @method     array findByDescripcion(string $descripcion) Return Material objects filtered by the descripcion column
 * @method     array findByFisico(boolean $fisico) Return Material objects filtered by the fisico column
 * @method     array findByTemaIdTema(int $tema_id_tema) Return Material objects filtered by the tema_id_tema column
 * @method     array findByBibliotecaIdBiblioteca(int $biblioteca_id_biblioteca) Return Material objects filtered by the biblioteca_id_biblioteca column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMaterialQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseMaterialQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Material', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaterialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MaterialQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaterialQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaterialQuery) {
            return $criteria;
        }
        $query = new MaterialQuery();
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
     * @return   Material|Material[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaterialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Material A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_MATERIAL`, `ARCHIVO`, `TITULO`, `EDITORIAL`, `AUTOR`, `DESCRIPCION`, `FISICO`, `TEMA_ID_TEMA`, `BIBLIOTECA_ID_BIBLIOTECA` FROM `material` WHERE `ID_MATERIAL` = :p0';
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
            $obj = new Material();
            $obj->hydrate($row);
            MaterialPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Material|Material[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Material[]|mixed the list of results, formatted by the current formatter
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
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MaterialPeer::ID_MATERIAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MaterialPeer::ID_MATERIAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_material column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMaterial(1234); // WHERE id_material = 1234
     * $query->filterByIdMaterial(array(12, 34)); // WHERE id_material IN (12, 34)
     * $query->filterByIdMaterial(array('min' => 12)); // WHERE id_material > 12
     * </code>
     *
     * @param     mixed $idMaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByIdMaterial($idMaterial = null, $comparison = null)
    {
        if (is_array($idMaterial) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MaterialPeer::ID_MATERIAL, $idMaterial, $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaterialPeer::ARCHIVO, $archivo, $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaterialPeer::TITULO, $titulo, $comparison);
    }

    /**
     * Filter the query on the editorial column
     *
     * Example usage:
     * <code>
     * $query->filterByEditorial('fooValue');   // WHERE editorial = 'fooValue'
     * $query->filterByEditorial('%fooValue%'); // WHERE editorial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editorial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByEditorial($editorial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editorial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editorial)) {
                $editorial = str_replace('*', '%', $editorial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialPeer::EDITORIAL, $editorial, $comparison);
    }

    /**
     * Filter the query on the autor column
     *
     * Example usage:
     * <code>
     * $query->filterByAutor('fooValue');   // WHERE autor = 'fooValue'
     * $query->filterByAutor('%fooValue%'); // WHERE autor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByAutor($autor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autor)) {
                $autor = str_replace('*', '%', $autor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialPeer::AUTOR, $autor, $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaterialPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the fisico column
     *
     * Example usage:
     * <code>
     * $query->filterByFisico(true); // WHERE fisico = true
     * $query->filterByFisico('yes'); // WHERE fisico = true
     * </code>
     *
     * @param     boolean|string $fisico The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByFisico($fisico = null, $comparison = null)
    {
        if (is_string($fisico)) {
            $fisico = in_array(strtolower($fisico), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MaterialPeer::FISICO, $fisico, $comparison);
    }

    /**
     * Filter the query on the tema_id_tema column
     *
     * Example usage:
     * <code>
     * $query->filterByTemaIdTema(1234); // WHERE tema_id_tema = 1234
     * $query->filterByTemaIdTema(array(12, 34)); // WHERE tema_id_tema IN (12, 34)
     * $query->filterByTemaIdTema(array('min' => 12)); // WHERE tema_id_tema > 12
     * </code>
     *
     * @see       filterByTema()
     *
     * @param     mixed $temaIdTema The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByTemaIdTema($temaIdTema = null, $comparison = null)
    {
        if (is_array($temaIdTema)) {
            $useMinMax = false;
            if (isset($temaIdTema['min'])) {
                $this->addUsingAlias(MaterialPeer::TEMA_ID_TEMA, $temaIdTema['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temaIdTema['max'])) {
                $this->addUsingAlias(MaterialPeer::TEMA_ID_TEMA, $temaIdTema['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialPeer::TEMA_ID_TEMA, $temaIdTema, $comparison);
    }

    /**
     * Filter the query on the biblioteca_id_biblioteca column
     *
     * Example usage:
     * <code>
     * $query->filterByBibliotecaIdBiblioteca(1234); // WHERE biblioteca_id_biblioteca = 1234
     * $query->filterByBibliotecaIdBiblioteca(array(12, 34)); // WHERE biblioteca_id_biblioteca IN (12, 34)
     * $query->filterByBibliotecaIdBiblioteca(array('min' => 12)); // WHERE biblioteca_id_biblioteca > 12
     * </code>
     *
     * @see       filterByBiblioteca()
     *
     * @param     mixed $bibliotecaIdBiblioteca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByBibliotecaIdBiblioteca($bibliotecaIdBiblioteca = null, $comparison = null)
    {
        if (is_array($bibliotecaIdBiblioteca)) {
            $useMinMax = false;
            if (isset($bibliotecaIdBiblioteca['min'])) {
                $this->addUsingAlias(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $bibliotecaIdBiblioteca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bibliotecaIdBiblioteca['max'])) {
                $this->addUsingAlias(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $bibliotecaIdBiblioteca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $bibliotecaIdBiblioteca, $comparison);
    }

    /**
     * Filter the query by a related Tema object
     *
     * @param   Tema|PropelObjectCollection $tema The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTema($tema, $comparison = null)
    {
        if ($tema instanceof Tema) {
            return $this
                ->addUsingAlias(MaterialPeer::TEMA_ID_TEMA, $tema->getIdTema(), $comparison);
        } elseif ($tema instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialPeer::TEMA_ID_TEMA, $tema->toKeyValue('PrimaryKey', 'IdTema'), $comparison);
        } else {
            throw new PropelException('filterByTema() only accepts arguments of type Tema or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tema relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function joinTema($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tema');

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
            $this->addJoinObject($join, 'Tema');
        }

        return $this;
    }

    /**
     * Use the Tema relation Tema object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TemaQuery A secondary query class using the current class as primary query
     */
    public function useTemaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTema($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tema', 'TemaQuery');
    }

    /**
     * Filter the query by a related Biblioteca object
     *
     * @param   Biblioteca|PropelObjectCollection $biblioteca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByBiblioteca($biblioteca, $comparison = null)
    {
        if ($biblioteca instanceof Biblioteca) {
            return $this
                ->addUsingAlias(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $biblioteca->getIdBiblioteca(), $comparison);
        } elseif ($biblioteca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $biblioteca->toKeyValue('PrimaryKey', 'IdBiblioteca'), $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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
     * Filter the query by a related AccesoMaterial object
     *
     * @param   AccesoMaterial|PropelObjectCollection $accesoMaterial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAccesoMaterial($accesoMaterial, $comparison = null)
    {
        if ($accesoMaterial instanceof AccesoMaterial) {
            return $this
                ->addUsingAlias(MaterialPeer::ID_MATERIAL, $accesoMaterial->getMaterialIdMaterial(), $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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
     * Filter the query by a related Lista object
     *
     * @param   Lista|PropelObjectCollection $lista  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLista($lista, $comparison = null)
    {
        if ($lista instanceof Lista) {
            return $this
                ->addUsingAlias(MaterialPeer::ID_MATERIAL, $lista->getMaterialIdMaterial(), $comparison);
        } elseif ($lista instanceof PropelObjectCollection) {
            return $this
                ->useListaQuery()
                ->filterByPrimaryKeys($lista->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLista() only accepts arguments of type Lista or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lista relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function joinLista($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lista');

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
            $this->addJoinObject($join, 'Lista');
        }

        return $this;
    }

    /**
     * Use the Lista relation Lista object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ListaQuery A secondary query class using the current class as primary query
     */
    public function useListaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLista($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lista', 'ListaQuery');
    }

    /**
     * Filter the query by a related MaterialAporte object
     *
     * @param   MaterialAporte|PropelObjectCollection $materialAporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterialAporte($materialAporte, $comparison = null)
    {
        if ($materialAporte instanceof MaterialAporte) {
            return $this
                ->addUsingAlias(MaterialPeer::ID_MATERIAL, $materialAporte->getMaterialIdMaterial(), $comparison);
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
     * @return MaterialQuery The current query, for fluid interface
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
     * Filter the query by a related MaterialCarrera object
     *
     * @param   MaterialCarrera|PropelObjectCollection $materialCarrera  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MaterialQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMaterialCarrera($materialCarrera, $comparison = null)
    {
        if ($materialCarrera instanceof MaterialCarrera) {
            return $this
                ->addUsingAlias(MaterialPeer::ID_MATERIAL, $materialCarrera->getMaterialIdMaterial(), $comparison);
        } elseif ($materialCarrera instanceof PropelObjectCollection) {
            return $this
                ->useMaterialCarreraQuery()
                ->filterByPrimaryKeys($materialCarrera->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMaterialCarrera() only accepts arguments of type MaterialCarrera or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MaterialCarrera relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function joinMaterialCarrera($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MaterialCarrera');

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
            $this->addJoinObject($join, 'MaterialCarrera');
        }

        return $this;
    }

    /**
     * Use the MaterialCarrera relation MaterialCarrera object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MaterialCarreraQuery A secondary query class using the current class as primary query
     */
    public function useMaterialCarreraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMaterialCarrera($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MaterialCarrera', 'MaterialCarreraQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Material $material Object to remove from the list of results
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function prune($material = null)
    {
        if ($material) {
            $this->addUsingAlias(MaterialPeer::ID_MATERIAL, $material->getIdMaterial(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseMaterialQuery