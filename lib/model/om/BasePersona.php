<?php


/**
 * Base class that represents a row from the 'persona' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersona extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'PersonaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PersonaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_persona field.
     * @var        int
     */
    protected $id_persona;

    /**
     * The value for the domicilio_legal field.
     * @var        string
     */
    protected $domicilio_legal;

    /**
     * The value for the domicilio_postal field.
     * @var        string
     */
    protected $domicilio_postal;

    /**
     * @var        PropelObjectCollection|Pfisica[] Collection to store aggregation of Pfisica objects.
     */
    protected $collPfisicas;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pfisicasScheduledForDeletion = null;

    /**
     * Get the [id_persona] column value.
     * 
     * @return   int
     */
    public function getIdPersona()
    {

        return $this->id_persona;
    }

    /**
     * Get the [domicilio_legal] column value.
     * 
     * @return   string
     */
    public function getDomicilioLegal()
    {

        return $this->domicilio_legal;
    }

    /**
     * Get the [domicilio_postal] column value.
     * 
     * @return   string
     */
    public function getDomicilioPostal()
    {

        return $this->domicilio_postal;
    }

    /**
     * Set the value of [id_persona] column.
     * 
     * @param      int $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setIdPersona($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_persona !== $v) {
            $this->id_persona = $v;
            $this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
        }


        return $this;
    } // setIdPersona()

    /**
     * Set the value of [domicilio_legal] column.
     * 
     * @param      string $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setDomicilioLegal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->domicilio_legal !== $v) {
            $this->domicilio_legal = $v;
            $this->modifiedColumns[] = PersonaPeer::DOMICILIO_LEGAL;
        }


        return $this;
    } // setDomicilioLegal()

    /**
     * Set the value of [domicilio_postal] column.
     * 
     * @param      string $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setDomicilioPostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->domicilio_postal !== $v) {
            $this->domicilio_postal = $v;
            $this->modifiedColumns[] = PersonaPeer::DOMICILIO_POSTAL;
        }


        return $this;
    } // setDomicilioPostal()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_persona = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->domicilio_legal = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->domicilio_postal = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = PersonaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Persona object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PersonaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collPfisicas = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PersonaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersona:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePersona:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersona:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePersona:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                PersonaPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->pfisicasScheduledForDeletion !== null) {
                if (!$this->pfisicasScheduledForDeletion->isEmpty()) {
                    PfisicaQuery::create()
                        ->filterByPrimaryKeys($this->pfisicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pfisicasScheduledForDeletion = null;
                }
            }

            if ($this->collPfisicas !== null) {
                foreach ($this->collPfisicas as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
        if (null !== $this->id_persona) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PersonaPeer::ID_PERSONA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PersonaPeer::ID_PERSONA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PERSONA`';
        }
        if ($this->isColumnModified(PersonaPeer::DOMICILIO_LEGAL)) {
            $modifiedColumns[':p' . $index++]  = '`DOMICILIO_LEGAL`';
        }
        if ($this->isColumnModified(PersonaPeer::DOMICILIO_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`DOMICILIO_POSTAL`';
        }

        $sql = sprintf(
            'INSERT INTO `persona` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PERSONA`':						
						$stmt->bindValue($identifier, $this->id_persona, PDO::PARAM_INT);
                        break;
                    case '`DOMICILIO_LEGAL`':						
						$stmt->bindValue($identifier, $this->domicilio_legal, PDO::PARAM_STR);
                        break;
                    case '`DOMICILIO_POSTAL`':						
						$stmt->bindValue($identifier, $this->domicilio_postal, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
			$pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdPersona($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PersonaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPfisicas !== null) {
                    foreach ($this->collPfisicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdPersona();
                break;
            case 1:
                return $this->getDomicilioLegal();
                break;
            case 2:
                return $this->getDomicilioPostal();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Persona'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Persona'][$this->getPrimaryKey()] = true;
        $keys = PersonaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPersona(),
            $keys[1] => $this->getDomicilioLegal(),
            $keys[2] => $this->getDomicilioPostal(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collPfisicas) {
                $result['Pfisicas'] = $this->collPfisicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdPersona($value);
                break;
            case 1:
                $this->setDomicilioLegal($value);
                break;
            case 2:
                $this->setDomicilioPostal($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PersonaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPersona($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDomicilioLegal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDomicilioPostal($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PersonaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PersonaPeer::ID_PERSONA)) $criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);
        if ($this->isColumnModified(PersonaPeer::DOMICILIO_LEGAL)) $criteria->add(PersonaPeer::DOMICILIO_LEGAL, $this->domicilio_legal);
        if ($this->isColumnModified(PersonaPeer::DOMICILIO_POSTAL)) $criteria->add(PersonaPeer::DOMICILIO_POSTAL, $this->domicilio_postal);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PersonaPeer::DATABASE_NAME);
        $criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPersona();
    }

    /**
     * Generic method to set the primary key (id_persona column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPersona($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPersona();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Persona (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDomicilioLegal($this->getDomicilioLegal());
        $copyObj->setDomicilioPostal($this->getDomicilioPostal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPfisicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPfisica($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPersona(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 Persona Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return   PersonaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PersonaPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Pfisica' == $relationName) {
            $this->initPfisicas();
        }
    }

    /**
     * Clears out the collPfisicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPfisicas()
     */
    public function clearPfisicas()
    {
        $this->collPfisicas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collPfisicas collection.
     *
     * By default this just sets the collPfisicas collection to an empty array (like clearcollPfisicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPfisicas($overrideExisting = true)
    {
        if (null !== $this->collPfisicas && !$overrideExisting) {
            return;
        }
        $this->collPfisicas = new PropelObjectCollection();
        $this->collPfisicas->setModel('Pfisica');
    }

    /**
     * Gets an array of Pfisica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Persona is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pfisica[] List of Pfisica objects
     * @throws PropelException
     */
    public function getPfisicas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collPfisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPfisicas) {
                // return empty collection
                $this->initPfisicas();
            } else {
                $collPfisicas = PfisicaQuery::create(null, $criteria)
                    ->filterByPersona($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collPfisicas;
                }
                $this->collPfisicas = $collPfisicas;
            }
        }

        return $this->collPfisicas;
    }

    /**
     * Sets a collection of Pfisica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $pfisicas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setPfisicas(PropelCollection $pfisicas, PropelPDO $con = null)
    {
        $this->pfisicasScheduledForDeletion = $this->getPfisicas(new Criteria(), $con)->diff($pfisicas);

        foreach ($this->pfisicasScheduledForDeletion as $pfisicaRemoved) {
            $pfisicaRemoved->setPersona(null);
        }

        $this->collPfisicas = null;
        foreach ($pfisicas as $pfisica) {
            $this->addPfisica($pfisica);
        }

        $this->collPfisicas = $pfisicas;
    }

    /**
     * Returns the number of related Pfisica objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Pfisica objects.
     * @throws PropelException
     */
    public function countPfisicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collPfisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPfisicas) {
                return 0;
            } else {
                $query = PfisicaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersona($this)
                    ->count($con);
            }
        } else {
            return count($this->collPfisicas);
        }
    }

    /**
     * Method called to associate a Pfisica object to this object
     * through the Pfisica foreign key attribute.
     *
     * @param    Pfisica $l Pfisica
     * @return   Persona The current object (for fluent API support)
     */
    public function addPfisica(Pfisica $l)
    {
        if ($this->collPfisicas === null) {
            $this->initPfisicas();
        }
        if (!$this->collPfisicas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddPfisica($l);
        }

        return $this;
    }

    /**
     * @param	Pfisica $pfisica The pfisica object to add.
     */
    protected function doAddPfisica($pfisica)
    {
        $this->collPfisicas[]= $pfisica;
        $pfisica->setPersona($this);
    }

    /**
     * @param	Pfisica $pfisica The pfisica object to remove.
     */
    public function removePfisica($pfisica)
    {
        if ($this->getPfisicas()->contains($pfisica)) {
            $this->collPfisicas->remove($this->collPfisicas->search($pfisica));
            if (null === $this->pfisicasScheduledForDeletion) {
                $this->pfisicasScheduledForDeletion = clone $this->collPfisicas;
                $this->pfisicasScheduledForDeletion->clear();
            }
            $this->pfisicasScheduledForDeletion[]= $pfisica;
            $pfisica->setPersona(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Persona is new, it will return
     * an empty collection; or if this Persona has previously
     * been saved, it will retrieve related Pfisicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Persona.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pfisica[] List of Pfisica objects
     */
    public function getPfisicasJoinTipoDoc($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PfisicaQuery::create(null, $criteria);
        $query->joinWith('TipoDoc', $join_behavior);

        return $this->getPfisicas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_persona = null;
        $this->domicilio_legal = null;
        $this->domicilio_postal = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collPfisicas) {
                foreach ($this->collPfisicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collPfisicas instanceof PropelCollection) {
            $this->collPfisicas->clearIterator();
        }
        $this->collPfisicas = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PersonaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePersona:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BasePersona
