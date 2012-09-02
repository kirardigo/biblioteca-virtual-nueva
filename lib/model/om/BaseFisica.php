<?php


/**
 * Base class that represents a row from the 'fisica' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseFisica extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'FisicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FisicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_fisica field.
     * @var        int
     */
    protected $id_fisica;

    /**
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the apellido field.
     * @var        string
     */
    protected $apellido;

    /**
     * The value for the usuario field.
     * @var        string
     */
    protected $usuario;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * @var        PropelObjectCollection|AccesoMaterial[] Collection to store aggregation of AccesoMaterial objects.
     */
    protected $collAccesoMaterials;

    /**
     * @var        PropelObjectCollection|CarreraFisica[] Collection to store aggregation of CarreraFisica objects.
     */
    protected $collCarreraFisicas;

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
    protected $accesoMaterialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $carreraFisicasScheduledForDeletion = null;

    /**
     * Get the [id_fisica] column value.
     * 
     * @return   int
     */
    public function getIdFisica()
    {

        return $this->id_fisica;
    }

    /**
     * Get the [nombre] column value.
     * 
     * @return   string
     */
    public function getNombre()
    {

        return $this->nombre;
    }

    /**
     * Get the [apellido] column value.
     * 
     * @return   string
     */
    public function getApellido()
    {

        return $this->apellido;
    }

    /**
     * Get the [usuario] column value.
     * 
     * @return   string
     */
    public function getUsuario()
    {

        return $this->usuario;
    }

    /**
     * Get the [password] column value.
     * 
     * @return   string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Set the value of [id_fisica] column.
     * 
     * @param      int $v new value
     * @return   Fisica The current object (for fluent API support)
     */
    public function setIdFisica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_fisica !== $v) {
            $this->id_fisica = $v;
            $this->modifiedColumns[] = FisicaPeer::ID_FISICA;
        }


        return $this;
    } // setIdFisica()

    /**
     * Set the value of [nombre] column.
     * 
     * @param      string $v new value
     * @return   Fisica The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = FisicaPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [apellido] column.
     * 
     * @param      string $v new value
     * @return   Fisica The current object (for fluent API support)
     */
    public function setApellido($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apellido !== $v) {
            $this->apellido = $v;
            $this->modifiedColumns[] = FisicaPeer::APELLIDO;
        }


        return $this;
    } // setApellido()

    /**
     * Set the value of [usuario] column.
     * 
     * @param      string $v new value
     * @return   Fisica The current object (for fluent API support)
     */
    public function setUsuario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario !== $v) {
            $this->usuario = $v;
            $this->modifiedColumns[] = FisicaPeer::USUARIO;
        }


        return $this;
    } // setUsuario()

    /**
     * Set the value of [password] column.
     * 
     * @param      string $v new value
     * @return   Fisica The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = FisicaPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

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

            $this->id_fisica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->apellido = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->usuario = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->password = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = FisicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Fisica object", $e);
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
            $con = Propel::getConnection(FisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FisicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAccesoMaterials = null;

            $this->collCarreraFisicas = null;

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
            $con = Propel::getConnection(FisicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FisicaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseFisica:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseFisica:delete:post') as $callable)
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
            $con = Propel::getConnection(FisicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseFisica:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseFisica:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                FisicaPeer::addInstanceToPool($this);
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

            if ($this->accesoMaterialsScheduledForDeletion !== null) {
                if (!$this->accesoMaterialsScheduledForDeletion->isEmpty()) {
                    AccesoMaterialQuery::create()
                        ->filterByPrimaryKeys($this->accesoMaterialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->accesoMaterialsScheduledForDeletion = null;
                }
            }

            if ($this->collAccesoMaterials !== null) {
                foreach ($this->collAccesoMaterials as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->carreraFisicasScheduledForDeletion !== null) {
                if (!$this->carreraFisicasScheduledForDeletion->isEmpty()) {
                    CarreraFisicaQuery::create()
                        ->filterByPrimaryKeys($this->carreraFisicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->carreraFisicasScheduledForDeletion = null;
                }
            }

            if ($this->collCarreraFisicas !== null) {
                foreach ($this->collCarreraFisicas as $referrerFK) {
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

        $this->modifiedColumns[] = FisicaPeer::ID_FISICA;
        if (null !== $this->id_fisica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FisicaPeer::ID_FISICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FisicaPeer::ID_FISICA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_FISICA`';
        }
        if ($this->isColumnModified(FisicaPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE`';
        }
        if ($this->isColumnModified(FisicaPeer::APELLIDO)) {
            $modifiedColumns[':p' . $index++]  = '`APELLIDO`';
        }
        if ($this->isColumnModified(FisicaPeer::USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`USUARIO`';
        }
        if ($this->isColumnModified(FisicaPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`PASSWORD`';
        }

        $sql = sprintf(
            'INSERT INTO `fisica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_FISICA`':						
						$stmt->bindValue($identifier, $this->id_fisica, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE`':						
						$stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`APELLIDO`':						
						$stmt->bindValue($identifier, $this->apellido, PDO::PARAM_STR);
                        break;
                    case '`USUARIO`':						
						$stmt->bindValue($identifier, $this->usuario, PDO::PARAM_STR);
                        break;
                    case '`PASSWORD`':						
						$stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
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
        $this->setIdFisica($pk);

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


            if (($retval = FisicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAccesoMaterials !== null) {
                    foreach ($this->collAccesoMaterials as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCarreraFisicas !== null) {
                    foreach ($this->collCarreraFisicas as $referrerFK) {
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
        $pos = FisicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdFisica();
                break;
            case 1:
                return $this->getNombre();
                break;
            case 2:
                return $this->getApellido();
                break;
            case 3:
                return $this->getUsuario();
                break;
            case 4:
                return $this->getPassword();
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
        if (isset($alreadyDumpedObjects['Fisica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Fisica'][$this->getPrimaryKey()] = true;
        $keys = FisicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFisica(),
            $keys[1] => $this->getNombre(),
            $keys[2] => $this->getApellido(),
            $keys[3] => $this->getUsuario(),
            $keys[4] => $this->getPassword(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collAccesoMaterials) {
                $result['AccesoMaterials'] = $this->collAccesoMaterials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCarreraFisicas) {
                $result['CarreraFisicas'] = $this->collCarreraFisicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = FisicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdFisica($value);
                break;
            case 1:
                $this->setNombre($value);
                break;
            case 2:
                $this->setApellido($value);
                break;
            case 3:
                $this->setUsuario($value);
                break;
            case 4:
                $this->setPassword($value);
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
        $keys = FisicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdFisica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setApellido($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUsuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPassword($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FisicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(FisicaPeer::ID_FISICA)) $criteria->add(FisicaPeer::ID_FISICA, $this->id_fisica);
        if ($this->isColumnModified(FisicaPeer::NOMBRE)) $criteria->add(FisicaPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(FisicaPeer::APELLIDO)) $criteria->add(FisicaPeer::APELLIDO, $this->apellido);
        if ($this->isColumnModified(FisicaPeer::USUARIO)) $criteria->add(FisicaPeer::USUARIO, $this->usuario);
        if ($this->isColumnModified(FisicaPeer::PASSWORD)) $criteria->add(FisicaPeer::PASSWORD, $this->password);

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
        $criteria = new Criteria(FisicaPeer::DATABASE_NAME);
        $criteria->add(FisicaPeer::ID_FISICA, $this->id_fisica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdFisica();
    }

    /**
     * Generic method to set the primary key (id_fisica column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdFisica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdFisica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Fisica (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombre($this->getNombre());
        $copyObj->setApellido($this->getApellido());
        $copyObj->setUsuario($this->getUsuario());
        $copyObj->setPassword($this->getPassword());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAccesoMaterials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAccesoMaterial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCarreraFisicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCarreraFisica($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFisica(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Fisica Clone of current object.
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
     * @return   FisicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FisicaPeer();
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
        if ('AccesoMaterial' == $relationName) {
            $this->initAccesoMaterials();
        }
        if ('CarreraFisica' == $relationName) {
            $this->initCarreraFisicas();
        }
    }

    /**
     * Clears out the collAccesoMaterials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAccesoMaterials()
     */
    public function clearAccesoMaterials()
    {
        $this->collAccesoMaterials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collAccesoMaterials collection.
     *
     * By default this just sets the collAccesoMaterials collection to an empty array (like clearcollAccesoMaterials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAccesoMaterials($overrideExisting = true)
    {
        if (null !== $this->collAccesoMaterials && !$overrideExisting) {
            return;
        }
        $this->collAccesoMaterials = new PropelObjectCollection();
        $this->collAccesoMaterials->setModel('AccesoMaterial');
    }

    /**
     * Gets an array of AccesoMaterial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Fisica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|AccesoMaterial[] List of AccesoMaterial objects
     * @throws PropelException
     */
    public function getAccesoMaterials($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAccesoMaterials || null !== $criteria) {
            if ($this->isNew() && null === $this->collAccesoMaterials) {
                // return empty collection
                $this->initAccesoMaterials();
            } else {
                $collAccesoMaterials = AccesoMaterialQuery::create(null, $criteria)
                    ->filterByFisica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAccesoMaterials;
                }
                $this->collAccesoMaterials = $collAccesoMaterials;
            }
        }

        return $this->collAccesoMaterials;
    }

    /**
     * Sets a collection of AccesoMaterial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $accesoMaterials A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setAccesoMaterials(PropelCollection $accesoMaterials, PropelPDO $con = null)
    {
        $this->accesoMaterialsScheduledForDeletion = $this->getAccesoMaterials(new Criteria(), $con)->diff($accesoMaterials);

        foreach ($this->accesoMaterialsScheduledForDeletion as $accesoMaterialRemoved) {
            $accesoMaterialRemoved->setFisica(null);
        }

        $this->collAccesoMaterials = null;
        foreach ($accesoMaterials as $accesoMaterial) {
            $this->addAccesoMaterial($accesoMaterial);
        }

        $this->collAccesoMaterials = $accesoMaterials;
    }

    /**
     * Returns the number of related AccesoMaterial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related AccesoMaterial objects.
     * @throws PropelException
     */
    public function countAccesoMaterials(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAccesoMaterials || null !== $criteria) {
            if ($this->isNew() && null === $this->collAccesoMaterials) {
                return 0;
            } else {
                $query = AccesoMaterialQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByFisica($this)
                    ->count($con);
            }
        } else {
            return count($this->collAccesoMaterials);
        }
    }

    /**
     * Method called to associate a AccesoMaterial object to this object
     * through the AccesoMaterial foreign key attribute.
     *
     * @param    AccesoMaterial $l AccesoMaterial
     * @return   Fisica The current object (for fluent API support)
     */
    public function addAccesoMaterial(AccesoMaterial $l)
    {
        if ($this->collAccesoMaterials === null) {
            $this->initAccesoMaterials();
        }
        if (!$this->collAccesoMaterials->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAccesoMaterial($l);
        }

        return $this;
    }

    /**
     * @param	AccesoMaterial $accesoMaterial The accesoMaterial object to add.
     */
    protected function doAddAccesoMaterial($accesoMaterial)
    {
        $this->collAccesoMaterials[]= $accesoMaterial;
        $accesoMaterial->setFisica($this);
    }

    /**
     * @param	AccesoMaterial $accesoMaterial The accesoMaterial object to remove.
     */
    public function removeAccesoMaterial($accesoMaterial)
    {
        if ($this->getAccesoMaterials()->contains($accesoMaterial)) {
            $this->collAccesoMaterials->remove($this->collAccesoMaterials->search($accesoMaterial));
            if (null === $this->accesoMaterialsScheduledForDeletion) {
                $this->accesoMaterialsScheduledForDeletion = clone $this->collAccesoMaterials;
                $this->accesoMaterialsScheduledForDeletion->clear();
            }
            $this->accesoMaterialsScheduledForDeletion[]= $accesoMaterial;
            $accesoMaterial->setFisica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Fisica is new, it will return
     * an empty collection; or if this Fisica has previously
     * been saved, it will retrieve related AccesoMaterials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Fisica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AccesoMaterial[] List of AccesoMaterial objects
     */
    public function getAccesoMaterialsJoinMaterial($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AccesoMaterialQuery::create(null, $criteria);
        $query->joinWith('Material', $join_behavior);

        return $this->getAccesoMaterials($query, $con);
    }

    /**
     * Clears out the collCarreraFisicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCarreraFisicas()
     */
    public function clearCarreraFisicas()
    {
        $this->collCarreraFisicas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collCarreraFisicas collection.
     *
     * By default this just sets the collCarreraFisicas collection to an empty array (like clearcollCarreraFisicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCarreraFisicas($overrideExisting = true)
    {
        if (null !== $this->collCarreraFisicas && !$overrideExisting) {
            return;
        }
        $this->collCarreraFisicas = new PropelObjectCollection();
        $this->collCarreraFisicas->setModel('CarreraFisica');
    }

    /**
     * Gets an array of CarreraFisica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Fisica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|CarreraFisica[] List of CarreraFisica objects
     * @throws PropelException
     */
    public function getCarreraFisicas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collCarreraFisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collCarreraFisicas) {
                // return empty collection
                $this->initCarreraFisicas();
            } else {
                $collCarreraFisicas = CarreraFisicaQuery::create(null, $criteria)
                    ->filterByFisica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collCarreraFisicas;
                }
                $this->collCarreraFisicas = $collCarreraFisicas;
            }
        }

        return $this->collCarreraFisicas;
    }

    /**
     * Sets a collection of CarreraFisica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $carreraFisicas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setCarreraFisicas(PropelCollection $carreraFisicas, PropelPDO $con = null)
    {
        $this->carreraFisicasScheduledForDeletion = $this->getCarreraFisicas(new Criteria(), $con)->diff($carreraFisicas);

        foreach ($this->carreraFisicasScheduledForDeletion as $carreraFisicaRemoved) {
            $carreraFisicaRemoved->setFisica(null);
        }

        $this->collCarreraFisicas = null;
        foreach ($carreraFisicas as $carreraFisica) {
            $this->addCarreraFisica($carreraFisica);
        }

        $this->collCarreraFisicas = $carreraFisicas;
    }

    /**
     * Returns the number of related CarreraFisica objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related CarreraFisica objects.
     * @throws PropelException
     */
    public function countCarreraFisicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collCarreraFisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collCarreraFisicas) {
                return 0;
            } else {
                $query = CarreraFisicaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByFisica($this)
                    ->count($con);
            }
        } else {
            return count($this->collCarreraFisicas);
        }
    }

    /**
     * Method called to associate a CarreraFisica object to this object
     * through the CarreraFisica foreign key attribute.
     *
     * @param    CarreraFisica $l CarreraFisica
     * @return   Fisica The current object (for fluent API support)
     */
    public function addCarreraFisica(CarreraFisica $l)
    {
        if ($this->collCarreraFisicas === null) {
            $this->initCarreraFisicas();
        }
        if (!$this->collCarreraFisicas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddCarreraFisica($l);
        }

        return $this;
    }

    /**
     * @param	CarreraFisica $carreraFisica The carreraFisica object to add.
     */
    protected function doAddCarreraFisica($carreraFisica)
    {
        $this->collCarreraFisicas[]= $carreraFisica;
        $carreraFisica->setFisica($this);
    }

    /**
     * @param	CarreraFisica $carreraFisica The carreraFisica object to remove.
     */
    public function removeCarreraFisica($carreraFisica)
    {
        if ($this->getCarreraFisicas()->contains($carreraFisica)) {
            $this->collCarreraFisicas->remove($this->collCarreraFisicas->search($carreraFisica));
            if (null === $this->carreraFisicasScheduledForDeletion) {
                $this->carreraFisicasScheduledForDeletion = clone $this->collCarreraFisicas;
                $this->carreraFisicasScheduledForDeletion->clear();
            }
            $this->carreraFisicasScheduledForDeletion[]= $carreraFisica;
            $carreraFisica->setFisica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Fisica is new, it will return
     * an empty collection; or if this Fisica has previously
     * been saved, it will retrieve related CarreraFisicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Fisica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CarreraFisica[] List of CarreraFisica objects
     */
    public function getCarreraFisicasJoinCarrera($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CarreraFisicaQuery::create(null, $criteria);
        $query->joinWith('Carrera', $join_behavior);

        return $this->getCarreraFisicas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_fisica = null;
        $this->nombre = null;
        $this->apellido = null;
        $this->usuario = null;
        $this->password = null;
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
            if ($this->collAccesoMaterials) {
                foreach ($this->collAccesoMaterials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCarreraFisicas) {
                foreach ($this->collCarreraFisicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collAccesoMaterials instanceof PropelCollection) {
            $this->collAccesoMaterials->clearIterator();
        }
        $this->collAccesoMaterials = null;
        if ($this->collCarreraFisicas instanceof PropelCollection) {
            $this->collCarreraFisicas->clearIterator();
        }
        $this->collCarreraFisicas = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FisicaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseFisica:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseFisica