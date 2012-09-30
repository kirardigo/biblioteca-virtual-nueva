<?php


/**
 * Base class that represents a query for the 'persona' table.
 *
 * 
 *
 * @method     PersonaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     PersonaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PersonaQuery orderByJuridica($order = Criteria::ASC) Order by the juridica column
 *
 * @method     PersonaQuery groupByIdPersona() Group by the id_persona column
 * @method     PersonaQuery groupByNombre() Group by the nombre column
 * @method     PersonaQuery groupByJuridica() Group by the juridica column
 *
 * @method     PersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Persona findOne(PropelPDO $con = null) Return the first Persona matching the query
 * @method     Persona findOneOrCreate(PropelPDO $con = null) Return the first Persona matching the query, or a new Persona object populated from the query conditions when no match is found
 *
 * @method     Persona findOneByIdPersona(int $id_persona) Return the first Persona filtered by the id_persona column
 * @method     Persona findOneByNombre(string $nombre) Return the first Persona filtered by the nombre column
 * @method     Persona findOneByJuridica(boolean $juridica) Return the first Persona filtered by the juridica column
 *
 * @method     array findByIdPersona(int $id_persona) Return Persona objects filtered by the id_persona column
 * @method     array findByNombre(string $nombre) Return Persona objects filtered by the nombre column
 * @method     array findByJuridica(boolean $juridica) Return Persona objects filtered by the juridica column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Persona', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaQuery) {
            return $criteria;
        }
        $query = new PersonaQuery();
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
     * @return   Persona|Persona[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Persona A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA`, `NOMBRE`, `JURIDICA` FROM `persona` WHERE `ID_PERSONA` = :p0';
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
            $obj = new Persona();
            $obj->hydrate($row);
            PersonaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Persona|Persona[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Persona[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersona(1234); // WHERE id_persona = 1234
     * $query->filterByIdPersona(array(12, 34)); // WHERE id_persona IN (12, 34)
     * $query->filterByIdPersona(array('min' => 12)); // WHERE id_persona > 12
     * </code>
     *
     * @param     mixed $idPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByIdPersona($idPersona = null, $comparison = null)
    {
        if (is_array($idPersona) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $idPersona, $comparison);
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
     * @return PersonaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PersonaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByJuridica(true); // WHERE juridica = true
     * $query->filterByJuridica('yes'); // WHERE juridica = true
     * </code>
     *
     * @param     boolean|string $juridica The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByJuridica($juridica = null, $comparison = null)
    {
        if (is_string($juridica)) {
            $juridica = in_array(strtolower($juridica), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PersonaPeer::JURIDICA, $juridica, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Persona $persona Object to remove from the list of results
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function prune($persona = null)
    {
        if ($persona) {
            $this->addUsingAlias(PersonaPeer::ID_PERSONA, $persona->getIdPersona(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaQuery