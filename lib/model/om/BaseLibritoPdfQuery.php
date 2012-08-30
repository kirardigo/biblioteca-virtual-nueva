<?php


/**
 * Base class that represents a query for the 'librito_pdf' table.
 *
 * 
 *
 * @method     LibritoPdfQuery orderByIdLibritoPdf($order = Criteria::ASC) Order by the id_librito_pdf column
 * @method     LibritoPdfQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     LibritoPdfQuery orderByCaption($order = Criteria::ASC) Order by the caption column
 * @method     LibritoPdfQuery orderByLibritoIdLibrito($order = Criteria::ASC) Order by the librito_id_librito column
 *
 * @method     LibritoPdfQuery groupByIdLibritoPdf() Group by the id_librito_pdf column
 * @method     LibritoPdfQuery groupByFilename() Group by the filename column
 * @method     LibritoPdfQuery groupByCaption() Group by the caption column
 * @method     LibritoPdfQuery groupByLibritoIdLibrito() Group by the librito_id_librito column
 *
 * @method     LibritoPdfQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LibritoPdfQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LibritoPdfQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LibritoPdfQuery leftJoinLibrito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Librito relation
 * @method     LibritoPdfQuery rightJoinLibrito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Librito relation
 * @method     LibritoPdfQuery innerJoinLibrito($relationAlias = null) Adds a INNER JOIN clause to the query using the Librito relation
 *
 * @method     LibritoPdf findOne(PropelPDO $con = null) Return the first LibritoPdf matching the query
 * @method     LibritoPdf findOneOrCreate(PropelPDO $con = null) Return the first LibritoPdf matching the query, or a new LibritoPdf object populated from the query conditions when no match is found
 *
 * @method     LibritoPdf findOneByIdLibritoPdf(int $id_librito_pdf) Return the first LibritoPdf filtered by the id_librito_pdf column
 * @method     LibritoPdf findOneByFilename(string $filename) Return the first LibritoPdf filtered by the filename column
 * @method     LibritoPdf findOneByCaption(string $caption) Return the first LibritoPdf filtered by the caption column
 * @method     LibritoPdf findOneByLibritoIdLibrito(int $librito_id_librito) Return the first LibritoPdf filtered by the librito_id_librito column
 *
 * @method     array findByIdLibritoPdf(int $id_librito_pdf) Return LibritoPdf objects filtered by the id_librito_pdf column
 * @method     array findByFilename(string $filename) Return LibritoPdf objects filtered by the filename column
 * @method     array findByCaption(string $caption) Return LibritoPdf objects filtered by the caption column
 * @method     array findByLibritoIdLibrito(int $librito_id_librito) Return LibritoPdf objects filtered by the librito_id_librito column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLibritoPdfQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLibritoPdfQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'LibritoPdf', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LibritoPdfQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     LibritoPdfQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LibritoPdfQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LibritoPdfQuery) {
            return $criteria;
        }
        $query = new LibritoPdfQuery();
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
     * @return   LibritoPdf|LibritoPdf[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LibritoPdfPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LibritoPdfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   LibritoPdf A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_LIBRITO_PDF`, `FILENAME`, `CAPTION`, `LIBRITO_ID_LIBRITO` FROM `librito_pdf` WHERE `ID_LIBRITO_PDF` = :p0';
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
            $obj = new LibritoPdf();
            $obj->hydrate($row);
            LibritoPdfPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LibritoPdf|LibritoPdf[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LibritoPdf[]|mixed the list of results, formatted by the current formatter
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
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LibritoPdfPeer::ID_LIBRITO_PDF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LibritoPdfPeer::ID_LIBRITO_PDF, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_librito_pdf column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLibritoPdf(1234); // WHERE id_librito_pdf = 1234
     * $query->filterByIdLibritoPdf(array(12, 34)); // WHERE id_librito_pdf IN (12, 34)
     * $query->filterByIdLibritoPdf(array('min' => 12)); // WHERE id_librito_pdf > 12
     * </code>
     *
     * @param     mixed $idLibritoPdf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByIdLibritoPdf($idLibritoPdf = null, $comparison = null)
    {
        if (is_array($idLibritoPdf) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(LibritoPdfPeer::ID_LIBRITO_PDF, $idLibritoPdf, $comparison);
    }

    /**
     * Filter the query on the filename column
     *
     * Example usage:
     * <code>
     * $query->filterByFilename('fooValue');   // WHERE filename = 'fooValue'
     * $query->filterByFilename('%fooValue%'); // WHERE filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByFilename($filename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filename)) {
                $filename = str_replace('*', '%', $filename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LibritoPdfPeer::FILENAME, $filename, $comparison);
    }

    /**
     * Filter the query on the caption column
     *
     * Example usage:
     * <code>
     * $query->filterByCaption('fooValue');   // WHERE caption = 'fooValue'
     * $query->filterByCaption('%fooValue%'); // WHERE caption LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caption The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByCaption($caption = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caption)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caption)) {
                $caption = str_replace('*', '%', $caption);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LibritoPdfPeer::CAPTION, $caption, $comparison);
    }

    /**
     * Filter the query on the librito_id_librito column
     *
     * Example usage:
     * <code>
     * $query->filterByLibritoIdLibrito(1234); // WHERE librito_id_librito = 1234
     * $query->filterByLibritoIdLibrito(array(12, 34)); // WHERE librito_id_librito IN (12, 34)
     * $query->filterByLibritoIdLibrito(array('min' => 12)); // WHERE librito_id_librito > 12
     * </code>
     *
     * @see       filterByLibrito()
     *
     * @param     mixed $libritoIdLibrito The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function filterByLibritoIdLibrito($libritoIdLibrito = null, $comparison = null)
    {
        if (is_array($libritoIdLibrito)) {
            $useMinMax = false;
            if (isset($libritoIdLibrito['min'])) {
                $this->addUsingAlias(LibritoPdfPeer::LIBRITO_ID_LIBRITO, $libritoIdLibrito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($libritoIdLibrito['max'])) {
                $this->addUsingAlias(LibritoPdfPeer::LIBRITO_ID_LIBRITO, $libritoIdLibrito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LibritoPdfPeer::LIBRITO_ID_LIBRITO, $libritoIdLibrito, $comparison);
    }

    /**
     * Filter the query by a related Librito object
     *
     * @param   Librito|PropelObjectCollection $librito The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LibritoPdfQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLibrito($librito, $comparison = null)
    {
        if ($librito instanceof Librito) {
            return $this
                ->addUsingAlias(LibritoPdfPeer::LIBRITO_ID_LIBRITO, $librito->getIdLibrito(), $comparison);
        } elseif ($librito instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LibritoPdfPeer::LIBRITO_ID_LIBRITO, $librito->toKeyValue('PrimaryKey', 'IdLibrito'), $comparison);
        } else {
            throw new PropelException('filterByLibrito() only accepts arguments of type Librito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Librito relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function joinLibrito($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Librito');

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
            $this->addJoinObject($join, 'Librito');
        }

        return $this;
    }

    /**
     * Use the Librito relation Librito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LibritoQuery A secondary query class using the current class as primary query
     */
    public function useLibritoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLibrito($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Librito', 'LibritoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LibritoPdf $libritoPdf Object to remove from the list of results
     *
     * @return LibritoPdfQuery The current query, for fluid interface
     */
    public function prune($libritoPdf = null)
    {
        if ($libritoPdf) {
            $this->addUsingAlias(LibritoPdfPeer::ID_LIBRITO_PDF, $libritoPdf->getIdLibritoPdf(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLibritoPdfQuery