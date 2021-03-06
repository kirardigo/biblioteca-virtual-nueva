<?php


/**
 * Base class that represents a row from the 'subcontenido' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSubcontenido extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'SubcontenidoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SubcontenidoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_subcontenido field.
     * @var        int
     */
    protected $id_subcontenido;

    /**
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the numero_subcontenido field.
     * @var        string
     */
    protected $numero_subcontenido;

    /**
     * The value for the contenido_id_contenido field.
     * @var        int
     */
    protected $contenido_id_contenido;

    /**
     * @var        Contenido
     */
    protected $aContenido;

    /**
     * @var        PropelObjectCollection|Tema[] Collection to store aggregation of Tema objects.
     */
    protected $collTemas;

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
    protected $temasScheduledForDeletion = null;

    /**
     * Get the [id_subcontenido] column value.
     * 
     * @return   int
     */
    public function getIdSubcontenido()
    {

        return $this->id_subcontenido;
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
     * Get the [numero_subcontenido] column value.
     * 
     * @return   string
     */
    public function getNumeroSubcontenido()
    {

        return $this->numero_subcontenido;
    }

    /**
     * Get the [contenido_id_contenido] column value.
     * 
     * @return   int
     */
    public function getContenidoIdContenido()
    {

        return $this->contenido_id_contenido;
    }

    /**
     * Set the value of [id_subcontenido] column.
     * 
     * @param      int $v new value
     * @return   Subcontenido The current object (for fluent API support)
     */
    public function setIdSubcontenido($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_subcontenido !== $v) {
            $this->id_subcontenido = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::ID_SUBCONTENIDO;
        }


        return $this;
    } // setIdSubcontenido()

    /**
     * Set the value of [nombre] column.
     * 
     * @param      string $v new value
     * @return   Subcontenido The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [numero_subcontenido] column.
     * 
     * @param      string $v new value
     * @return   Subcontenido The current object (for fluent API support)
     */
    public function setNumeroSubcontenido($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->numero_subcontenido !== $v) {
            $this->numero_subcontenido = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::NUMERO_SUBCONTENIDO;
        }


        return $this;
    } // setNumeroSubcontenido()

    /**
     * Set the value of [contenido_id_contenido] column.
     * 
     * @param      int $v new value
     * @return   Subcontenido The current object (for fluent API support)
     */
    public function setContenidoIdContenido($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->contenido_id_contenido !== $v) {
            $this->contenido_id_contenido = $v;
            $this->modifiedColumns[] = SubcontenidoPeer::CONTENIDO_ID_CONTENIDO;
        }

        if ($this->aContenido !== null && $this->aContenido->getIdContenido() !== $v) {
            $this->aContenido = null;
        }


        return $this;
    } // setContenidoIdContenido()

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

            $this->id_subcontenido = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->numero_subcontenido = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->contenido_id_contenido = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = SubcontenidoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Subcontenido object", $e);
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

        if ($this->aContenido !== null && $this->contenido_id_contenido !== $this->aContenido->getIdContenido()) {
            $this->aContenido = null;
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
            $con = Propel::getConnection(SubcontenidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SubcontenidoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aContenido = null;
            $this->collTemas = null;

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
            $con = Propel::getConnection(SubcontenidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SubcontenidoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSubcontenido:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseSubcontenido:delete:post') as $callable)
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
            $con = Propel::getConnection(SubcontenidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseSubcontenido:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseSubcontenido:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                SubcontenidoPeer::addInstanceToPool($this);
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

            if ($this->aContenido !== null) {
                if ($this->aContenido->isModified() || $this->aContenido->isNew()) {
                    $affectedRows += $this->aContenido->save($con);
                }
                $this->setContenido($this->aContenido);
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

            if ($this->temasScheduledForDeletion !== null) {
                if (!$this->temasScheduledForDeletion->isEmpty()) {
                    TemaQuery::create()
                        ->filterByPrimaryKeys($this->temasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->temasScheduledForDeletion = null;
                }
            }

            if ($this->collTemas !== null) {
                foreach ($this->collTemas as $referrerFK) {
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

        $this->modifiedColumns[] = SubcontenidoPeer::ID_SUBCONTENIDO;
        if (null !== $this->id_subcontenido) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SubcontenidoPeer::ID_SUBCONTENIDO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SubcontenidoPeer::ID_SUBCONTENIDO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SUBCONTENIDO`';
        }
        if ($this->isColumnModified(SubcontenidoPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE`';
        }
        if ($this->isColumnModified(SubcontenidoPeer::NUMERO_SUBCONTENIDO)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_SUBCONTENIDO`';
        }
        if ($this->isColumnModified(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO)) {
            $modifiedColumns[':p' . $index++]  = '`CONTENIDO_ID_CONTENIDO`';
        }

        $sql = sprintf(
            'INSERT INTO `subcontenido` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_SUBCONTENIDO`':						
						$stmt->bindValue($identifier, $this->id_subcontenido, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE`':						
						$stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_SUBCONTENIDO`':						
						$stmt->bindValue($identifier, $this->numero_subcontenido, PDO::PARAM_STR);
                        break;
                    case '`CONTENIDO_ID_CONTENIDO`':						
						$stmt->bindValue($identifier, $this->contenido_id_contenido, PDO::PARAM_INT);
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
        $this->setIdSubcontenido($pk);

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

            if ($this->aContenido !== null) {
                if (!$this->aContenido->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContenido->getValidationFailures());
                }
            }


            if (($retval = SubcontenidoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTemas !== null) {
                    foreach ($this->collTemas as $referrerFK) {
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
        $pos = SubcontenidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdSubcontenido();
                break;
            case 1:
                return $this->getNombre();
                break;
            case 2:
                return $this->getNumeroSubcontenido();
                break;
            case 3:
                return $this->getContenidoIdContenido();
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
        if (isset($alreadyDumpedObjects['Subcontenido'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Subcontenido'][$this->getPrimaryKey()] = true;
        $keys = SubcontenidoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSubcontenido(),
            $keys[1] => $this->getNombre(),
            $keys[2] => $this->getNumeroSubcontenido(),
            $keys[3] => $this->getContenidoIdContenido(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aContenido) {
                $result['Contenido'] = $this->aContenido->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTemas) {
                $result['Temas'] = $this->collTemas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SubcontenidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdSubcontenido($value);
                break;
            case 1:
                $this->setNombre($value);
                break;
            case 2:
                $this->setNumeroSubcontenido($value);
                break;
            case 3:
                $this->setContenidoIdContenido($value);
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
        $keys = SubcontenidoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSubcontenido($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumeroSubcontenido($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setContenidoIdContenido($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SubcontenidoPeer::DATABASE_NAME);

        if ($this->isColumnModified(SubcontenidoPeer::ID_SUBCONTENIDO)) $criteria->add(SubcontenidoPeer::ID_SUBCONTENIDO, $this->id_subcontenido);
        if ($this->isColumnModified(SubcontenidoPeer::NOMBRE)) $criteria->add(SubcontenidoPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(SubcontenidoPeer::NUMERO_SUBCONTENIDO)) $criteria->add(SubcontenidoPeer::NUMERO_SUBCONTENIDO, $this->numero_subcontenido);
        if ($this->isColumnModified(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO)) $criteria->add(SubcontenidoPeer::CONTENIDO_ID_CONTENIDO, $this->contenido_id_contenido);

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
        $criteria = new Criteria(SubcontenidoPeer::DATABASE_NAME);
        $criteria->add(SubcontenidoPeer::ID_SUBCONTENIDO, $this->id_subcontenido);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSubcontenido();
    }

    /**
     * Generic method to set the primary key (id_subcontenido column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSubcontenido($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdSubcontenido();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Subcontenido (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombre($this->getNombre());
        $copyObj->setNumeroSubcontenido($this->getNumeroSubcontenido());
        $copyObj->setContenidoIdContenido($this->getContenidoIdContenido());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTemas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTema($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSubcontenido(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Subcontenido Clone of current object.
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
     * @return   SubcontenidoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SubcontenidoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Contenido object.
     *
     * @param                  Contenido $v
     * @return                 Subcontenido The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContenido(Contenido $v = null)
    {
        if ($v === null) {
            $this->setContenidoIdContenido(NULL);
        } else {
            $this->setContenidoIdContenido($v->getIdContenido());
        }

        $this->aContenido = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contenido object, it will not be re-added.
        if ($v !== null) {
            $v->addSubcontenido($this);
        }


        return $this;
    }


    /**
     * Get the associated Contenido object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Contenido The associated Contenido object.
     * @throws PropelException
     */
    public function getContenido(PropelPDO $con = null)
    {
        if ($this->aContenido === null && ($this->contenido_id_contenido !== null)) {
            $this->aContenido = ContenidoQuery::create()->findPk($this->contenido_id_contenido, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContenido->addSubcontenidos($this);
             */
        }

        return $this->aContenido;
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
        if ('Tema' == $relationName) {
            $this->initTemas();
        }
    }

    /**
     * Clears out the collTemas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTemas()
     */
    public function clearTemas()
    {
        $this->collTemas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collTemas collection.
     *
     * By default this just sets the collTemas collection to an empty array (like clearcollTemas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTemas($overrideExisting = true)
    {
        if (null !== $this->collTemas && !$overrideExisting) {
            return;
        }
        $this->collTemas = new PropelObjectCollection();
        $this->collTemas->setModel('Tema');
    }

    /**
     * Gets an array of Tema objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Subcontenido is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Tema[] List of Tema objects
     * @throws PropelException
     */
    public function getTemas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collTemas || null !== $criteria) {
            if ($this->isNew() && null === $this->collTemas) {
                // return empty collection
                $this->initTemas();
            } else {
                $collTemas = TemaQuery::create(null, $criteria)
                    ->filterBySubcontenido($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collTemas;
                }
                $this->collTemas = $collTemas;
            }
        }

        return $this->collTemas;
    }

    /**
     * Sets a collection of Tema objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $temas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setTemas(PropelCollection $temas, PropelPDO $con = null)
    {
        $this->temasScheduledForDeletion = $this->getTemas(new Criteria(), $con)->diff($temas);

        foreach ($this->temasScheduledForDeletion as $temaRemoved) {
            $temaRemoved->setSubcontenido(null);
        }

        $this->collTemas = null;
        foreach ($temas as $tema) {
            $this->addTema($tema);
        }

        $this->collTemas = $temas;
    }

    /**
     * Returns the number of related Tema objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Tema objects.
     * @throws PropelException
     */
    public function countTemas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collTemas || null !== $criteria) {
            if ($this->isNew() && null === $this->collTemas) {
                return 0;
            } else {
                $query = TemaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySubcontenido($this)
                    ->count($con);
            }
        } else {
            return count($this->collTemas);
        }
    }

    /**
     * Method called to associate a Tema object to this object
     * through the Tema foreign key attribute.
     *
     * @param    Tema $l Tema
     * @return   Subcontenido The current object (for fluent API support)
     */
    public function addTema(Tema $l)
    {
        if ($this->collTemas === null) {
            $this->initTemas();
        }
        if (!$this->collTemas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddTema($l);
        }

        return $this;
    }

    /**
     * @param	Tema $tema The tema object to add.
     */
    protected function doAddTema($tema)
    {
        $this->collTemas[]= $tema;
        $tema->setSubcontenido($this);
    }

    /**
     * @param	Tema $tema The tema object to remove.
     */
    public function removeTema($tema)
    {
        if ($this->getTemas()->contains($tema)) {
            $this->collTemas->remove($this->collTemas->search($tema));
            if (null === $this->temasScheduledForDeletion) {
                $this->temasScheduledForDeletion = clone $this->collTemas;
                $this->temasScheduledForDeletion->clear();
            }
            $this->temasScheduledForDeletion[]= $tema;
            $tema->setSubcontenido(null);
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_subcontenido = null;
        $this->nombre = null;
        $this->numero_subcontenido = null;
        $this->contenido_id_contenido = null;
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
            if ($this->collTemas) {
                foreach ($this->collTemas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collTemas instanceof PropelCollection) {
            $this->collTemas->clearIterator();
        }
        $this->collTemas = null;
        $this->aContenido = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string The value of the 'nombre' column
     */
    public function __toString()
    {
        return (string) $this->getNombre();
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseSubcontenido:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseSubcontenido
