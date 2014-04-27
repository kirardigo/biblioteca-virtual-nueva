<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 * 
 *
 * @method     UsuarioQuery orderByIdUsuario($order = Criteria::ASC) Order by the id_usuario column
 * @method     UsuarioQuery orderByValido($order = Criteria::ASC) Order by the valido column
 * @method     UsuarioQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method     UsuarioQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     UsuarioQuery orderByAdmin($order = Criteria::ASC) Order by the admin column
 * @method     UsuarioQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UsuarioQuery orderBySubidor($order = Criteria::ASC) Order by the subidor column
 *
 * @method     UsuarioQuery groupByIdUsuario() Group by the id_usuario column
 * @method     UsuarioQuery groupByValido() Group by the valido column
 * @method     UsuarioQuery groupByUsuario() Group by the usuario column
 * @method     UsuarioQuery groupByPassword() Group by the password column
 * @method     UsuarioQuery groupByAdmin() Group by the admin column
 * @method     UsuarioQuery groupByEmail() Group by the email column
 * @method     UsuarioQuery groupBySubidor() Group by the subidor column
 *
 * @method     UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UsuarioQuery leftJoinPfisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pfisica relation
 * @method     UsuarioQuery rightJoinPfisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pfisica relation
 * @method     UsuarioQuery innerJoinPfisica($relationAlias = null) Adds a INNER JOIN clause to the query using the Pfisica relation
 *
 * @method     UsuarioQuery leftJoinAccesoMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the AccesoMaterial relation
 * @method     UsuarioQuery rightJoinAccesoMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AccesoMaterial relation
 * @method     UsuarioQuery innerJoinAccesoMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the AccesoMaterial relation
 *
 * @method     UsuarioQuery leftJoinAnuncio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Anuncio relation
 * @method     UsuarioQuery rightJoinAnuncio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Anuncio relation
 * @method     UsuarioQuery innerJoinAnuncio($relationAlias = null) Adds a INNER JOIN clause to the query using the Anuncio relation
 *
 * @method     UsuarioQuery leftJoinAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aporte relation
 * @method     UsuarioQuery rightJoinAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aporte relation
 * @method     UsuarioQuery innerJoinAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Aporte relation
 *
 * @method     UsuarioQuery leftJoinLista($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lista relation
 * @method     UsuarioQuery rightJoinLista($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lista relation
 * @method     UsuarioQuery innerJoinLista($relationAlias = null) Adds a INNER JOIN clause to the query using the Lista relation
 *
 * @method     Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method     Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method     Usuario findOneByIdUsuario(int $id_usuario) Return the first Usuario filtered by the id_usuario column
 * @method     Usuario findOneByValido(boolean $valido) Return the first Usuario filtered by the valido column
 * @method     Usuario findOneByUsuario(string $usuario) Return the first Usuario filtered by the usuario column
 * @method     Usuario findOneByPassword(string $password) Return the first Usuario filtered by the password column
 * @method     Usuario findOneByAdmin(boolean $admin) Return the first Usuario filtered by the admin column
 * @method     Usuario findOneByEmail(string $email) Return the first Usuario filtered by the email column
 * @method     Usuario findOneBySubidor(boolean $subidor) Return the first Usuario filtered by the subidor column
 *
 * @method     array findByIdUsuario(int $id_usuario) Return Usuario objects filtered by the id_usuario column
 * @method     array findByValido(boolean $valido) Return Usuario objects filtered by the valido column
 * @method     array findByUsuario(string $usuario) Return Usuario objects filtered by the usuario column
 * @method     array findByPassword(string $password) Return Usuario objects filtered by the password column
 * @method     array findByAdmin(boolean $admin) Return Usuario objects filtered by the admin column
 * @method     array findByEmail(string $email) Return Usuario objects filtered by the email column
 * @method     array findBySubidor(boolean $subidor) Return Usuario objects filtered by the subidor column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseUsuarioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Usuario', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery();
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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Usuario A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_USUARIO`, `VALIDO`, `USUARIO`, `PASSWORD`, `ADMIN`, `EMAIL`, `SUBIDOR` FROM `usuario` WHERE `ID_USUARIO` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::ID_USUARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::ID_USUARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE id_usuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE id_usuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE id_usuario > 12
     * </code>
     *
     * @see       filterByPfisica()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UsuarioPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the valido column
     *
     * Example usage:
     * <code>
     * $query->filterByValido(true); // WHERE valido = true
     * $query->filterByValido('yes'); // WHERE valido = true
     * </code>
     *
     * @param     boolean|string $valido The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByValido($valido = null, $comparison = null)
    {
        if (is_string($valido)) {
            $valido = in_array(strtolower($valido), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsuarioPeer::VALIDO, $valido, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::USUARIO, $usuario, $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(UsuarioPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the admin column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmin(true); // WHERE admin = true
     * $query->filterByAdmin('yes'); // WHERE admin = true
     * </code>
     *
     * @param     boolean|string $admin The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByAdmin($admin = null, $comparison = null)
    {
        if (is_string($admin)) {
            $admin = in_array(strtolower($admin), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsuarioPeer::ADMIN, $admin, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the subidor column
     *
     * Example usage:
     * <code>
     * $query->filterBySubidor(true); // WHERE subidor = true
     * $query->filterBySubidor('yes'); // WHERE subidor = true
     * </code>
     *
     * @param     boolean|string $subidor The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterBySubidor($subidor = null, $comparison = null)
    {
        if (is_string($subidor)) {
            $subidor = in_array(strtolower($subidor), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsuarioPeer::SUBIDOR, $subidor, $comparison);
    }

    /**
     * Filter the query by a related Pfisica object
     *
     * @param   Pfisica|PropelObjectCollection $pfisica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPfisica($pfisica, $comparison = null)
    {
        if ($pfisica instanceof Pfisica) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $pfisica->getIdPfisica(), $comparison);
        } elseif ($pfisica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $pfisica->toKeyValue('PrimaryKey', 'IdPfisica'), $comparison);
        } else {
            throw new PropelException('filterByPfisica() only accepts arguments of type Pfisica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pfisica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinPfisica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pfisica');

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
            $this->addJoinObject($join, 'Pfisica');
        }

        return $this;
    }

    /**
     * Use the Pfisica relation Pfisica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PfisicaQuery A secondary query class using the current class as primary query
     */
    public function usePfisicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPfisica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pfisica', 'PfisicaQuery');
    }

    /**
     * Filter the query by a related AccesoMaterial object
     *
     * @param   AccesoMaterial|PropelObjectCollection $accesoMaterial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAccesoMaterial($accesoMaterial, $comparison = null)
    {
        if ($accesoMaterial instanceof AccesoMaterial) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $accesoMaterial->getUsuarioIdUsuario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related Anuncio object
     *
     * @param   Anuncio|PropelObjectCollection $anuncio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAnuncio($anuncio, $comparison = null)
    {
        if ($anuncio instanceof Anuncio) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $anuncio->getUsuarioIdUsuario(), $comparison);
        } elseif ($anuncio instanceof PropelObjectCollection) {
            return $this
                ->useAnuncioQuery()
                ->filterByPrimaryKeys($anuncio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAnuncio() only accepts arguments of type Anuncio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Anuncio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinAnuncio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Anuncio');

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
            $this->addJoinObject($join, 'Anuncio');
        }

        return $this;
    }

    /**
     * Use the Anuncio relation Anuncio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AnuncioQuery A secondary query class using the current class as primary query
     */
    public function useAnuncioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAnuncio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Anuncio', 'AnuncioQuery');
    }

    /**
     * Filter the query by a related Aporte object
     *
     * @param   Aporte|PropelObjectCollection $aporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAporte($aporte, $comparison = null)
    {
        if ($aporte instanceof Aporte) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $aporte->getUsuarioIdUsuario(), $comparison);
        } elseif ($aporte instanceof PropelObjectCollection) {
            return $this
                ->useAporteQuery()
                ->filterByPrimaryKeys($aporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAporte() only accepts arguments of type Aporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Aporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinAporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Aporte');

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
            $this->addJoinObject($join, 'Aporte');
        }

        return $this;
    }

    /**
     * Use the Aporte relation Aporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AporteQuery A secondary query class using the current class as primary query
     */
    public function useAporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Aporte', 'AporteQuery');
    }

    /**
     * Filter the query by a related Lista object
     *
     * @param   Lista|PropelObjectCollection $lista  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLista($lista, $comparison = null)
    {
        if ($lista instanceof Lista) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_USUARIO, $lista->getUsuarioIdUsuario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::ID_USUARIO, $usuario->getIdUsuario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseUsuarioQuery