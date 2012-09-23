<?php


/**
 * Base class that represents a row from the 'domicilio' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDomicilio extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'DomicilioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DomicilioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_domicilio field.
     * @var        int
     */
    protected $id_domicilio;

    /**
     * The value for the calle field.
     * @var        string
     */
    protected $calle;

    /**
     * The value for the altura field.
     * @var        string
     */
    protected $altura;

    /**
     * The value for the cod_postal field.
     * @var        string
     */
    protected $cod_postal;

    /**
     * The value for the localidad_id_localidad field.
     * @var        int
     */
    protected $localidad_id_localidad;

    /**
     * The value for the persona_id_persona field.
     * @var        int
     */
    protected $persona_id_persona;

    /**
     * @var        Localidad
     */
    protected $aLocalidad;

    /**
     * @var        Persona
     */
    protected $aPersona;

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
     * Get the [id_domicilio] column value.
     * 
     * @return   int
     */
    public function getIdDomicilio()
    {

        return $this->id_domicilio;
    }

    /**
     * Get the [calle] column value.
     * 
     * @return   string
     */
    public function getCalle()
    {

        return $this->calle;
    }

    /**
     * Get the [altura] column value.
     * 
     * @return   string
     */
    public function getAltura()
    {

        return $this->altura;
    }

    /**
     * Get the [cod_postal] column value.
     * 
     * @return   string
     */
    public function getCodPostal()
    {

        return $this->cod_postal;
    }

    /**
     * Get the [localidad_id_localidad] column value.
     * 
     * @return   int
     */
    public function getLocalidadIdLocalidad()
    {

        return $this->localidad_id_localidad;
    }

    /**
     * Get the [persona_id_persona] column value.
     * 
     * @return   int
     */
    public function getPersonaIdPersona()
    {

        return $this->persona_id_persona;
    }

    /**
     * Set the value of [id_domicilio] column.
     * 
     * @param      int $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setIdDomicilio($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_domicilio !== $v) {
            $this->id_domicilio = $v;
            $this->modifiedColumns[] = DomicilioPeer::ID_DOMICILIO;
        }


        return $this;
    } // setIdDomicilio()

    /**
     * Set the value of [calle] column.
     * 
     * @param      string $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->calle !== $v) {
            $this->calle = $v;
            $this->modifiedColumns[] = DomicilioPeer::CALLE;
        }


        return $this;
    } // setCalle()

    /**
     * Set the value of [altura] column.
     * 
     * @param      string $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setAltura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->altura !== $v) {
            $this->altura = $v;
            $this->modifiedColumns[] = DomicilioPeer::ALTURA;
        }


        return $this;
    } // setAltura()

    /**
     * Set the value of [cod_postal] column.
     * 
     * @param      string $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setCodPostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cod_postal !== $v) {
            $this->cod_postal = $v;
            $this->modifiedColumns[] = DomicilioPeer::COD_POSTAL;
        }


        return $this;
    } // setCodPostal()

    /**
     * Set the value of [localidad_id_localidad] column.
     * 
     * @param      int $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setLocalidadIdLocalidad($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->localidad_id_localidad !== $v) {
            $this->localidad_id_localidad = $v;
            $this->modifiedColumns[] = DomicilioPeer::LOCALIDAD_ID_LOCALIDAD;
        }

        if ($this->aLocalidad !== null && $this->aLocalidad->getIdLocalidad() !== $v) {
            $this->aLocalidad = null;
        }


        return $this;
    } // setLocalidadIdLocalidad()

    /**
     * Set the value of [persona_id_persona] column.
     * 
     * @param      int $v new value
     * @return   Domicilio The current object (for fluent API support)
     */
    public function setPersonaIdPersona($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->persona_id_persona !== $v) {
            $this->persona_id_persona = $v;
            $this->modifiedColumns[] = DomicilioPeer::PERSONA_ID_PERSONA;
        }

        if ($this->aPersona !== null && $this->aPersona->getIdPersona() !== $v) {
            $this->aPersona = null;
        }


        return $this;
    } // setPersonaIdPersona()

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

            $this->id_domicilio = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->calle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->altura = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cod_postal = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->localidad_id_localidad = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->persona_id_persona = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = DomicilioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Domicilio object", $e);
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

        if ($this->aLocalidad !== null && $this->localidad_id_localidad !== $this->aLocalidad->getIdLocalidad()) {
            $this->aLocalidad = null;
        }
        if ($this->aPersona !== null && $this->persona_id_persona !== $this->aPersona->getIdPersona()) {
            $this->aPersona = null;
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
            $con = Propel::getConnection(DomicilioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DomicilioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLocalidad = null;
            $this->aPersona = null;
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
            $con = Propel::getConnection(DomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DomicilioQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseDomicilio:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseDomicilio:delete:post') as $callable)
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
            $con = Propel::getConnection(DomicilioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseDomicilio:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseDomicilio:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                DomicilioPeer::addInstanceToPool($this);
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

            if ($this->aLocalidad !== null) {
                if ($this->aLocalidad->isModified() || $this->aLocalidad->isNew()) {
                    $affectedRows += $this->aLocalidad->save($con);
                }
                $this->setLocalidad($this->aLocalidad);
            }

            if ($this->aPersona !== null) {
                if ($this->aPersona->isModified() || $this->aPersona->isNew()) {
                    $affectedRows += $this->aPersona->save($con);
                }
                $this->setPersona($this->aPersona);
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

        $this->modifiedColumns[] = DomicilioPeer::ID_DOMICILIO;
        if (null !== $this->id_domicilio) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DomicilioPeer::ID_DOMICILIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DomicilioPeer::ID_DOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DOMICILIO`';
        }
        if ($this->isColumnModified(DomicilioPeer::CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`CALLE`';
        }
        if ($this->isColumnModified(DomicilioPeer::ALTURA)) {
            $modifiedColumns[':p' . $index++]  = '`ALTURA`';
        }
        if ($this->isColumnModified(DomicilioPeer::COD_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`COD_POSTAL`';
        }
        if ($this->isColumnModified(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`LOCALIDAD_ID_LOCALIDAD`';
        }
        if ($this->isColumnModified(DomicilioPeer::PERSONA_ID_PERSONA)) {
            $modifiedColumns[':p' . $index++]  = '`PERSONA_ID_PERSONA`';
        }

        $sql = sprintf(
            'INSERT INTO `domicilio` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_DOMICILIO`':						
						$stmt->bindValue($identifier, $this->id_domicilio, PDO::PARAM_INT);
                        break;
                    case '`CALLE`':						
						$stmt->bindValue($identifier, $this->calle, PDO::PARAM_STR);
                        break;
                    case '`ALTURA`':						
						$stmt->bindValue($identifier, $this->altura, PDO::PARAM_STR);
                        break;
                    case '`COD_POSTAL`':						
						$stmt->bindValue($identifier, $this->cod_postal, PDO::PARAM_STR);
                        break;
                    case '`LOCALIDAD_ID_LOCALIDAD`':						
						$stmt->bindValue($identifier, $this->localidad_id_localidad, PDO::PARAM_INT);
                        break;
                    case '`PERSONA_ID_PERSONA`':						
						$stmt->bindValue($identifier, $this->persona_id_persona, PDO::PARAM_INT);
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
        $this->setIdDomicilio($pk);

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

            if ($this->aLocalidad !== null) {
                if (!$this->aLocalidad->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocalidad->getValidationFailures());
                }
            }

            if ($this->aPersona !== null) {
                if (!$this->aPersona->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPersona->getValidationFailures());
                }
            }


            if (($retval = DomicilioPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DomicilioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDomicilio();
                break;
            case 1:
                return $this->getCalle();
                break;
            case 2:
                return $this->getAltura();
                break;
            case 3:
                return $this->getCodPostal();
                break;
            case 4:
                return $this->getLocalidadIdLocalidad();
                break;
            case 5:
                return $this->getPersonaIdPersona();
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
        if (isset($alreadyDumpedObjects['Domicilio'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Domicilio'][$this->getPrimaryKey()] = true;
        $keys = DomicilioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDomicilio(),
            $keys[1] => $this->getCalle(),
            $keys[2] => $this->getAltura(),
            $keys[3] => $this->getCodPostal(),
            $keys[4] => $this->getLocalidadIdLocalidad(),
            $keys[5] => $this->getPersonaIdPersona(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aLocalidad) {
                $result['Localidad'] = $this->aLocalidad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPersona) {
                $result['Persona'] = $this->aPersona->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = DomicilioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDomicilio($value);
                break;
            case 1:
                $this->setCalle($value);
                break;
            case 2:
                $this->setAltura($value);
                break;
            case 3:
                $this->setCodPostal($value);
                break;
            case 4:
                $this->setLocalidadIdLocalidad($value);
                break;
            case 5:
                $this->setPersonaIdPersona($value);
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
        $keys = DomicilioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDomicilio($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCalle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAltura($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCodPostal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocalidadIdLocalidad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPersonaIdPersona($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DomicilioPeer::DATABASE_NAME);

        if ($this->isColumnModified(DomicilioPeer::ID_DOMICILIO)) $criteria->add(DomicilioPeer::ID_DOMICILIO, $this->id_domicilio);
        if ($this->isColumnModified(DomicilioPeer::CALLE)) $criteria->add(DomicilioPeer::CALLE, $this->calle);
        if ($this->isColumnModified(DomicilioPeer::ALTURA)) $criteria->add(DomicilioPeer::ALTURA, $this->altura);
        if ($this->isColumnModified(DomicilioPeer::COD_POSTAL)) $criteria->add(DomicilioPeer::COD_POSTAL, $this->cod_postal);
        if ($this->isColumnModified(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD)) $criteria->add(DomicilioPeer::LOCALIDAD_ID_LOCALIDAD, $this->localidad_id_localidad);
        if ($this->isColumnModified(DomicilioPeer::PERSONA_ID_PERSONA)) $criteria->add(DomicilioPeer::PERSONA_ID_PERSONA, $this->persona_id_persona);

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
        $criteria = new Criteria(DomicilioPeer::DATABASE_NAME);
        $criteria->add(DomicilioPeer::ID_DOMICILIO, $this->id_domicilio);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDomicilio();
    }

    /**
     * Generic method to set the primary key (id_domicilio column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDomicilio($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDomicilio();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Domicilio (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCalle($this->getCalle());
        $copyObj->setAltura($this->getAltura());
        $copyObj->setCodPostal($this->getCodPostal());
        $copyObj->setLocalidadIdLocalidad($this->getLocalidadIdLocalidad());
        $copyObj->setPersonaIdPersona($this->getPersonaIdPersona());

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
            $copyObj->setIdDomicilio(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Domicilio Clone of current object.
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
     * @return   DomicilioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DomicilioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Localidad object.
     *
     * @param                  Localidad $v
     * @return                 Domicilio The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLocalidad(Localidad $v = null)
    {
        if ($v === null) {
            $this->setLocalidadIdLocalidad(NULL);
        } else {
            $this->setLocalidadIdLocalidad($v->getIdLocalidad());
        }

        $this->aLocalidad = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Localidad object, it will not be re-added.
        if ($v !== null) {
            $v->addDomicilio($this);
        }


        return $this;
    }


    /**
     * Get the associated Localidad object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Localidad The associated Localidad object.
     * @throws PropelException
     */
    public function getLocalidad(PropelPDO $con = null)
    {
        if ($this->aLocalidad === null && ($this->localidad_id_localidad !== null)) {
            $this->aLocalidad = LocalidadQuery::create()->findPk($this->localidad_id_localidad, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLocalidad->addDomicilios($this);
             */
        }

        return $this->aLocalidad;
    }

    /**
     * Declares an association between this object and a Persona object.
     *
     * @param                  Persona $v
     * @return                 Domicilio The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPersona(Persona $v = null)
    {
        if ($v === null) {
            $this->setPersonaIdPersona(NULL);
        } else {
            $this->setPersonaIdPersona($v->getIdPersona());
        }

        $this->aPersona = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Persona object, it will not be re-added.
        if ($v !== null) {
            $v->addDomicilio($this);
        }


        return $this;
    }


    /**
     * Get the associated Persona object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Persona The associated Persona object.
     * @throws PropelException
     */
    public function getPersona(PropelPDO $con = null)
    {
        if ($this->aPersona === null && ($this->persona_id_persona !== null)) {
            $this->aPersona = PersonaQuery::create()->findPk($this->persona_id_persona, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPersona->addDomicilios($this);
             */
        }

        return $this->aPersona;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_domicilio = null;
        $this->calle = null;
        $this->altura = null;
        $this->cod_postal = null;
        $this->localidad_id_localidad = null;
        $this->persona_id_persona = null;
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

        $this->aLocalidad = null;
        $this->aPersona = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DomicilioPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseDomicilio:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseDomicilio
