<?php


/**
 * Base class that represents a row from the 'lista' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLista extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'ListaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ListaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_lista field.
     * @var        int
     */
    protected $id_lista;

    /**
     * The value for the informacion field.
     * @var        string
     */
    protected $informacion;

    /**
     * The value for the material_id_material field.
     * @var        int
     */
    protected $material_id_material;

    /**
     * The value for the usuario_id_usuario field.
     * @var        int
     */
    protected $usuario_id_usuario;

    /**
     * @var        Material
     */
    protected $aMaterial;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

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
     * Get the [id_lista] column value.
     * 
     * @return   int
     */
    public function getIdLista()
    {

        return $this->id_lista;
    }

    /**
     * Get the [informacion] column value.
     * 
     * @return   string
     */
    public function getInformacion()
    {

        return $this->informacion;
    }

    /**
     * Get the [material_id_material] column value.
     * 
     * @return   int
     */
    public function getMaterialIdMaterial()
    {

        return $this->material_id_material;
    }

    /**
     * Get the [usuario_id_usuario] column value.
     * 
     * @return   int
     */
    public function getUsuarioIdUsuario()
    {

        return $this->usuario_id_usuario;
    }

    /**
     * Set the value of [id_lista] column.
     * 
     * @param      int $v new value
     * @return   Lista The current object (for fluent API support)
     */
    public function setIdLista($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_lista !== $v) {
            $this->id_lista = $v;
            $this->modifiedColumns[] = ListaPeer::ID_LISTA;
        }


        return $this;
    } // setIdLista()

    /**
     * Set the value of [informacion] column.
     * 
     * @param      string $v new value
     * @return   Lista The current object (for fluent API support)
     */
    public function setInformacion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->informacion !== $v) {
            $this->informacion = $v;
            $this->modifiedColumns[] = ListaPeer::INFORMACION;
        }


        return $this;
    } // setInformacion()

    /**
     * Set the value of [material_id_material] column.
     * 
     * @param      int $v new value
     * @return   Lista The current object (for fluent API support)
     */
    public function setMaterialIdMaterial($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->material_id_material !== $v) {
            $this->material_id_material = $v;
            $this->modifiedColumns[] = ListaPeer::MATERIAL_ID_MATERIAL;
        }

        if ($this->aMaterial !== null && $this->aMaterial->getIdMaterial() !== $v) {
            $this->aMaterial = null;
        }


        return $this;
    } // setMaterialIdMaterial()

    /**
     * Set the value of [usuario_id_usuario] column.
     * 
     * @param      int $v new value
     * @return   Lista The current object (for fluent API support)
     */
    public function setUsuarioIdUsuario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->usuario_id_usuario !== $v) {
            $this->usuario_id_usuario = $v;
            $this->modifiedColumns[] = ListaPeer::USUARIO_ID_USUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setUsuarioIdUsuario()

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

            $this->id_lista = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->informacion = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->material_id_material = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->usuario_id_usuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = ListaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Lista object", $e);
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

        if ($this->aMaterial !== null && $this->material_id_material !== $this->aMaterial->getIdMaterial()) {
            $this->aMaterial = null;
        }
        if ($this->aUsuario !== null && $this->usuario_id_usuario !== $this->aUsuario->getIdUsuario()) {
            $this->aUsuario = null;
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
            $con = Propel::getConnection(ListaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ListaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMaterial = null;
            $this->aUsuario = null;
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
            $con = Propel::getConnection(ListaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ListaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseLista:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseLista:delete:post') as $callable)
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
            $con = Propel::getConnection(ListaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseLista:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseLista:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                ListaPeer::addInstanceToPool($this);
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

            if ($this->aMaterial !== null) {
                if ($this->aMaterial->isModified() || $this->aMaterial->isNew()) {
                    $affectedRows += $this->aMaterial->save($con);
                }
                $this->setMaterial($this->aMaterial);
            }

            if ($this->aUsuario !== null) {
                if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
                    $affectedRows += $this->aUsuario->save($con);
                }
                $this->setUsuario($this->aUsuario);
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

        $this->modifiedColumns[] = ListaPeer::ID_LISTA;
        if (null !== $this->id_lista) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ListaPeer::ID_LISTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ListaPeer::ID_LISTA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_LISTA`';
        }
        if ($this->isColumnModified(ListaPeer::INFORMACION)) {
            $modifiedColumns[':p' . $index++]  = '`INFORMACION`';
        }
        if ($this->isColumnModified(ListaPeer::MATERIAL_ID_MATERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MATERIAL_ID_MATERIAL`';
        }
        if ($this->isColumnModified(ListaPeer::USUARIO_ID_USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`USUARIO_ID_USUARIO`';
        }

        $sql = sprintf(
            'INSERT INTO `lista` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_LISTA`':						
						$stmt->bindValue($identifier, $this->id_lista, PDO::PARAM_INT);
                        break;
                    case '`INFORMACION`':						
						$stmt->bindValue($identifier, $this->informacion, PDO::PARAM_STR);
                        break;
                    case '`MATERIAL_ID_MATERIAL`':						
						$stmt->bindValue($identifier, $this->material_id_material, PDO::PARAM_INT);
                        break;
                    case '`USUARIO_ID_USUARIO`':						
						$stmt->bindValue($identifier, $this->usuario_id_usuario, PDO::PARAM_INT);
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
        $this->setIdLista($pk);

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

            if ($this->aMaterial !== null) {
                if (!$this->aMaterial->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMaterial->getValidationFailures());
                }
            }

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = ListaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ListaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdLista();
                break;
            case 1:
                return $this->getInformacion();
                break;
            case 2:
                return $this->getMaterialIdMaterial();
                break;
            case 3:
                return $this->getUsuarioIdUsuario();
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
        if (isset($alreadyDumpedObjects['Lista'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Lista'][$this->getPrimaryKey()] = true;
        $keys = ListaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdLista(),
            $keys[1] => $this->getInformacion(),
            $keys[2] => $this->getMaterialIdMaterial(),
            $keys[3] => $this->getUsuarioIdUsuario(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aMaterial) {
                $result['Material'] = $this->aMaterial->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ListaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdLista($value);
                break;
            case 1:
                $this->setInformacion($value);
                break;
            case 2:
                $this->setMaterialIdMaterial($value);
                break;
            case 3:
                $this->setUsuarioIdUsuario($value);
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
        $keys = ListaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdLista($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setInformacion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMaterialIdMaterial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUsuarioIdUsuario($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ListaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ListaPeer::ID_LISTA)) $criteria->add(ListaPeer::ID_LISTA, $this->id_lista);
        if ($this->isColumnModified(ListaPeer::INFORMACION)) $criteria->add(ListaPeer::INFORMACION, $this->informacion);
        if ($this->isColumnModified(ListaPeer::MATERIAL_ID_MATERIAL)) $criteria->add(ListaPeer::MATERIAL_ID_MATERIAL, $this->material_id_material);
        if ($this->isColumnModified(ListaPeer::USUARIO_ID_USUARIO)) $criteria->add(ListaPeer::USUARIO_ID_USUARIO, $this->usuario_id_usuario);

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
        $criteria = new Criteria(ListaPeer::DATABASE_NAME);
        $criteria->add(ListaPeer::ID_LISTA, $this->id_lista);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdLista();
    }

    /**
     * Generic method to set the primary key (id_lista column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdLista($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdLista();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Lista (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInformacion($this->getInformacion());
        $copyObj->setMaterialIdMaterial($this->getMaterialIdMaterial());
        $copyObj->setUsuarioIdUsuario($this->getUsuarioIdUsuario());

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
            $copyObj->setIdLista(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Lista Clone of current object.
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
     * @return   ListaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ListaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Material object.
     *
     * @param                  Material $v
     * @return                 Lista The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMaterial(Material $v = null)
    {
        if ($v === null) {
            $this->setMaterialIdMaterial(NULL);
        } else {
            $this->setMaterialIdMaterial($v->getIdMaterial());
        }

        $this->aMaterial = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Material object, it will not be re-added.
        if ($v !== null) {
            $v->addLista($this);
        }


        return $this;
    }


    /**
     * Get the associated Material object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Material The associated Material object.
     * @throws PropelException
     */
    public function getMaterial(PropelPDO $con = null)
    {
        if ($this->aMaterial === null && ($this->material_id_material !== null)) {
            $this->aMaterial = MaterialQuery::create()->findPk($this->material_id_material, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMaterial->addListas($this);
             */
        }

        return $this->aMaterial;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return                 Lista The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setUsuarioIdUsuario(NULL);
        } else {
            $this->setUsuarioIdUsuario($v->getIdUsuario());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addLista($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuario(PropelPDO $con = null)
    {
        if ($this->aUsuario === null && ($this->usuario_id_usuario !== null)) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->usuario_id_usuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addListas($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_lista = null;
        $this->informacion = null;
        $this->material_id_material = null;
        $this->usuario_id_usuario = null;
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

        $this->aMaterial = null;
        $this->aUsuario = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ListaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseLista:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseLista
