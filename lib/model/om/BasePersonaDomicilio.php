<?php


/**
 * Base class that represents a row from the 'persona_domicilio' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaDomicilio extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'PersonaDomicilioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PersonaDomicilioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpersona_domicilio field.
     * @var        int
     */
    protected $idpersona_domicilio;

    /**
     * The value for the pfisica_id_pfisica field.
     * @var        int
     */
    protected $pfisica_id_pfisica;

    /**
     * The value for the pjuridica_id_pjuridica field.
     * @var        int
     */
    protected $pjuridica_id_pjuridica;

    /**
     * The value for the domicilio_id_domicilio field.
     * @var        int
     */
    protected $domicilio_id_domicilio;

    /**
     * @var        Pfisica
     */
    protected $aPfisica;

    /**
     * @var        Pjuridica
     */
    protected $aPjuridica;

    /**
     * @var        Domicilio
     */
    protected $aDomicilio;

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
     * Get the [idpersona_domicilio] column value.
     * 
     * @return   int
     */
    public function getIdpersonaDomicilio()
    {

        return $this->idpersona_domicilio;
    }

    /**
     * Get the [pfisica_id_pfisica] column value.
     * 
     * @return   int
     */
    public function getPfisicaIdPfisica()
    {

        return $this->pfisica_id_pfisica;
    }

    /**
     * Get the [pjuridica_id_pjuridica] column value.
     * 
     * @return   int
     */
    public function getPjuridicaIdPjuridica()
    {

        return $this->pjuridica_id_pjuridica;
    }

    /**
     * Get the [domicilio_id_domicilio] column value.
     * 
     * @return   int
     */
    public function getDomicilioIdDomicilio()
    {

        return $this->domicilio_id_domicilio;
    }

    /**
     * Set the value of [idpersona_domicilio] column.
     * 
     * @param      int $v new value
     * @return   PersonaDomicilio The current object (for fluent API support)
     */
    public function setIdpersonaDomicilio($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->idpersona_domicilio !== $v) {
            $this->idpersona_domicilio = $v;
            $this->modifiedColumns[] = PersonaDomicilioPeer::IDPERSONA_DOMICILIO;
        }


        return $this;
    } // setIdpersonaDomicilio()

    /**
     * Set the value of [pfisica_id_pfisica] column.
     * 
     * @param      int $v new value
     * @return   PersonaDomicilio The current object (for fluent API support)
     */
    public function setPfisicaIdPfisica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pfisica_id_pfisica !== $v) {
            $this->pfisica_id_pfisica = $v;
            $this->modifiedColumns[] = PersonaDomicilioPeer::PFISICA_ID_PFISICA;
        }

        if ($this->aPfisica !== null && $this->aPfisica->getIdPfisica() !== $v) {
            $this->aPfisica = null;
        }


        return $this;
    } // setPfisicaIdPfisica()

    /**
     * Set the value of [pjuridica_id_pjuridica] column.
     * 
     * @param      int $v new value
     * @return   PersonaDomicilio The current object (for fluent API support)
     */
    public function setPjuridicaIdPjuridica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pjuridica_id_pjuridica !== $v) {
            $this->pjuridica_id_pjuridica = $v;
            $this->modifiedColumns[] = PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA;
        }

        if ($this->aPjuridica !== null && $this->aPjuridica->getIdPjuridica() !== $v) {
            $this->aPjuridica = null;
        }


        return $this;
    } // setPjuridicaIdPjuridica()

    /**
     * Set the value of [domicilio_id_domicilio] column.
     * 
     * @param      int $v new value
     * @return   PersonaDomicilio The current object (for fluent API support)
     */
    public function setDomicilioIdDomicilio($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->domicilio_id_domicilio !== $v) {
            $this->domicilio_id_domicilio = $v;
            $this->modifiedColumns[] = PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO;
        }

        if ($this->aDomicilio !== null && $this->aDomicilio->getIdDomicilio() !== $v) {
            $this->aDomicilio = null;
        }


        return $this;
    } // setDomicilioIdDomicilio()

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

            $this->idpersona_domicilio = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->pfisica_id_pfisica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pjuridica_id_pjuridica = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->domicilio_id_domicilio = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = PersonaDomicilioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PersonaDomicilio object", $e);
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

        if ($this->aPfisica !== null && $this->pfisica_id_pfisica !== $this->aPfisica->getIdPfisica()) {
            $this->aPfisica = null;
        }
        if ($this->aPjuridica !== null && $this->pjuridica_id_pjuridica !== $this->aPjuridica->getIdPjuridica()) {
            $this->aPjuridica = null;
        }
        if ($this->aDomicilio !== null && $this->domicilio_id_domicilio !== $this->aDomicilio->getIdDomicilio()) {
            $this->aDomicilio = null;
        }
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
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PersonaDomicilioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPfisica = null;
            $this->aPjuridica = null;
            $this->aDomicilio = null;
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
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PersonaDomicilioQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersonaDomicilio:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersonaDomicilio:delete:post') as $callable)
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
            $con = Propel::getConnection(PersonaDomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersonaDomicilio:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersonaDomicilio:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                PersonaDomicilioPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aPfisica !== null) {
                if ($this->aPfisica->isModified() || $this->aPfisica->isNew()) {
                    $affectedRows += $this->aPfisica->save($con);
                }
                $this->setPfisica($this->aPfisica);
            }

            if ($this->aPjuridica !== null) {
                if ($this->aPjuridica->isModified() || $this->aPjuridica->isNew()) {
                    $affectedRows += $this->aPjuridica->save($con);
                }
                $this->setPjuridica($this->aPjuridica);
            }

            if ($this->aDomicilio !== null) {
                if ($this->aDomicilio->isModified() || $this->aDomicilio->isNew()) {
                    $affectedRows += $this->aDomicilio->save($con);
                }
                $this->setDomicilio($this->aDomicilio);
            }

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

        $this->modifiedColumns[] = PersonaDomicilioPeer::IDPERSONA_DOMICILIO;
        if (null !== $this->idpersona_domicilio) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PersonaDomicilioPeer::IDPERSONA_DOMICILIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PersonaDomicilioPeer::IDPERSONA_DOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`IDPERSONA_DOMICILIO`';
        }
        if ($this->isColumnModified(PersonaDomicilioPeer::PFISICA_ID_PFISICA)) {
            $modifiedColumns[':p' . $index++]  = '`PFISICA_ID_PFISICA`';
        }
        if ($this->isColumnModified(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA)) {
            $modifiedColumns[':p' . $index++]  = '`PJURIDICA_ID_PJURIDICA`';
        }
        if ($this->isColumnModified(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`DOMICILIO_ID_DOMICILIO`';
        }

        $sql = sprintf(
            'INSERT INTO `persona_domicilio` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`IDPERSONA_DOMICILIO`':						
						$stmt->bindValue($identifier, $this->idpersona_domicilio, PDO::PARAM_INT);
                        break;
                    case '`PFISICA_ID_PFISICA`':						
						$stmt->bindValue($identifier, $this->pfisica_id_pfisica, PDO::PARAM_INT);
                        break;
                    case '`PJURIDICA_ID_PJURIDICA`':						
						$stmt->bindValue($identifier, $this->pjuridica_id_pjuridica, PDO::PARAM_INT);
                        break;
                    case '`DOMICILIO_ID_DOMICILIO`':						
						$stmt->bindValue($identifier, $this->domicilio_id_domicilio, PDO::PARAM_INT);
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
        $this->setIdpersonaDomicilio($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aPfisica !== null) {
                if (!$this->aPfisica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPfisica->getValidationFailures());
                }
            }

            if ($this->aPjuridica !== null) {
                if (!$this->aPjuridica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPjuridica->getValidationFailures());
                }
            }

            if ($this->aDomicilio !== null) {
                if (!$this->aDomicilio->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDomicilio->getValidationFailures());
                }
            }


            if (($retval = PersonaDomicilioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = PersonaDomicilioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpersonaDomicilio();
                break;
            case 1:
                return $this->getPfisicaIdPfisica();
                break;
            case 2:
                return $this->getPjuridicaIdPjuridica();
                break;
            case 3:
                return $this->getDomicilioIdDomicilio();
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
        if (isset($alreadyDumpedObjects['PersonaDomicilio'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PersonaDomicilio'][$this->getPrimaryKey()] = true;
        $keys = PersonaDomicilioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpersonaDomicilio(),
            $keys[1] => $this->getPfisicaIdPfisica(),
            $keys[2] => $this->getPjuridicaIdPjuridica(),
            $keys[3] => $this->getDomicilioIdDomicilio(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aPfisica) {
                $result['Pfisica'] = $this->aPfisica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPjuridica) {
                $result['Pjuridica'] = $this->aPjuridica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDomicilio) {
                $result['Domicilio'] = $this->aDomicilio->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = PersonaDomicilioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpersonaDomicilio($value);
                break;
            case 1:
                $this->setPfisicaIdPfisica($value);
                break;
            case 2:
                $this->setPjuridicaIdPjuridica($value);
                break;
            case 3:
                $this->setDomicilioIdDomicilio($value);
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
        $keys = PersonaDomicilioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpersonaDomicilio($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPfisicaIdPfisica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPjuridicaIdPjuridica($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDomicilioIdDomicilio($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PersonaDomicilioPeer::DATABASE_NAME);

        if ($this->isColumnModified(PersonaDomicilioPeer::IDPERSONA_DOMICILIO)) $criteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, $this->idpersona_domicilio);
        if ($this->isColumnModified(PersonaDomicilioPeer::PFISICA_ID_PFISICA)) $criteria->add(PersonaDomicilioPeer::PFISICA_ID_PFISICA, $this->pfisica_id_pfisica);
        if ($this->isColumnModified(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA)) $criteria->add(PersonaDomicilioPeer::PJURIDICA_ID_PJURIDICA, $this->pjuridica_id_pjuridica);
        if ($this->isColumnModified(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO)) $criteria->add(PersonaDomicilioPeer::DOMICILIO_ID_DOMICILIO, $this->domicilio_id_domicilio);

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
        $criteria = new Criteria(PersonaDomicilioPeer::DATABASE_NAME);
        $criteria->add(PersonaDomicilioPeer::IDPERSONA_DOMICILIO, $this->idpersona_domicilio);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpersonaDomicilio();
    }

    /**
     * Generic method to set the primary key (idpersona_domicilio column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpersonaDomicilio($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpersonaDomicilio();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of PersonaDomicilio (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPfisicaIdPfisica($this->getPfisicaIdPfisica());
        $copyObj->setPjuridicaIdPjuridica($this->getPjuridicaIdPjuridica());
        $copyObj->setDomicilioIdDomicilio($this->getDomicilioIdDomicilio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpersonaDomicilio(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 PersonaDomicilio Clone of current object.
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
     * @return   PersonaDomicilioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PersonaDomicilioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Pfisica object.
     *
     * @param                  Pfisica $v
     * @return                 PersonaDomicilio The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPfisica(Pfisica $v = null)
    {
        if ($v === null) {
            $this->setPfisicaIdPfisica(NULL);
        } else {
            $this->setPfisicaIdPfisica($v->getIdPfisica());
        }

        $this->aPfisica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Pfisica object, it will not be re-added.
        if ($v !== null) {
            $v->addPersonaDomicilio($this);
        }


        return $this;
    }


    /**
     * Get the associated Pfisica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Pfisica The associated Pfisica object.
     * @throws PropelException
     */
    public function getPfisica(PropelPDO $con = null)
    {
        if ($this->aPfisica === null && ($this->pfisica_id_pfisica !== null)) {
            $this->aPfisica = PfisicaQuery::create()->findPk($this->pfisica_id_pfisica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPfisica->addPersonaDomicilios($this);
             */
        }

        return $this->aPfisica;
    }

    /**
     * Declares an association between this object and a Pjuridica object.
     *
     * @param                  Pjuridica $v
     * @return                 PersonaDomicilio The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPjuridica(Pjuridica $v = null)
    {
        if ($v === null) {
            $this->setPjuridicaIdPjuridica(NULL);
        } else {
            $this->setPjuridicaIdPjuridica($v->getIdPjuridica());
        }

        $this->aPjuridica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Pjuridica object, it will not be re-added.
        if ($v !== null) {
            $v->addPersonaDomicilio($this);
        }


        return $this;
    }


    /**
     * Get the associated Pjuridica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Pjuridica The associated Pjuridica object.
     * @throws PropelException
     */
    public function getPjuridica(PropelPDO $con = null)
    {
        if ($this->aPjuridica === null && ($this->pjuridica_id_pjuridica !== null)) {
            $this->aPjuridica = PjuridicaQuery::create()->findPk($this->pjuridica_id_pjuridica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPjuridica->addPersonaDomicilios($this);
             */
        }

        return $this->aPjuridica;
    }

    /**
     * Declares an association between this object and a Domicilio object.
     *
     * @param                  Domicilio $v
     * @return                 PersonaDomicilio The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDomicilio(Domicilio $v = null)
    {
        if ($v === null) {
            $this->setDomicilioIdDomicilio(NULL);
        } else {
            $this->setDomicilioIdDomicilio($v->getIdDomicilio());
        }

        $this->aDomicilio = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Domicilio object, it will not be re-added.
        if ($v !== null) {
            $v->addPersonaDomicilio($this);
        }


        return $this;
    }


    /**
     * Get the associated Domicilio object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Domicilio The associated Domicilio object.
     * @throws PropelException
     */
    public function getDomicilio(PropelPDO $con = null)
    {
        if ($this->aDomicilio === null && ($this->domicilio_id_domicilio !== null)) {
            $this->aDomicilio = DomicilioQuery::create()->findPk($this->domicilio_id_domicilio, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDomicilio->addPersonaDomicilios($this);
             */
        }

        return $this->aDomicilio;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpersona_domicilio = null;
        $this->pfisica_id_pfisica = null;
        $this->pjuridica_id_pjuridica = null;
        $this->domicilio_id_domicilio = null;
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
        } // if ($deep)

        $this->aPfisica = null;
        $this->aPjuridica = null;
        $this->aDomicilio = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PersonaDomicilioPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePersonaDomicilio:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BasePersonaDomicilio
