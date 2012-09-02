<?php


/**
 * Base class that represents a row from the 'acceso_material' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAccesoMaterial extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'AccesoMaterialPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AccesoMaterialPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_acceso_material field.
     * @var        int
     */
    protected $id_acceso_material;

    /**
     * The value for the fisica_id_fisica field.
     * @var        int
     */
    protected $fisica_id_fisica;

    /**
     * The value for the material_id_material field.
     * @var        int
     */
    protected $material_id_material;

    /**
     * The value for the fecha_acceso field.
     * @var        string
     */
    protected $fecha_acceso;

    /**
     * @var        Fisica
     */
    protected $aFisica;

    /**
     * @var        Material
     */
    protected $aMaterial;

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
     * Get the [id_acceso_material] column value.
     * 
     * @return   int
     */
    public function getIdAccesoMaterial()
    {

        return $this->id_acceso_material;
    }

    /**
     * Get the [fisica_id_fisica] column value.
     * 
     * @return   int
     */
    public function getFisicaIdFisica()
    {

        return $this->fisica_id_fisica;
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
     * Get the [optionally formatted] temporal [fecha_acceso] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaAcceso($format = 'Y-m-d H:i:s')
    {
        if ($this->fecha_acceso === null) {
            return null;
        }


        if ($this->fecha_acceso === '0000-00-00 00:00:00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_acceso);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_acceso, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Set the value of [id_acceso_material] column.
     * 
     * @param      int $v new value
     * @return   AccesoMaterial The current object (for fluent API support)
     */
    public function setIdAccesoMaterial($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_acceso_material !== $v) {
            $this->id_acceso_material = $v;
            $this->modifiedColumns[] = AccesoMaterialPeer::ID_ACCESO_MATERIAL;
        }


        return $this;
    } // setIdAccesoMaterial()

    /**
     * Set the value of [fisica_id_fisica] column.
     * 
     * @param      int $v new value
     * @return   AccesoMaterial The current object (for fluent API support)
     */
    public function setFisicaIdFisica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->fisica_id_fisica !== $v) {
            $this->fisica_id_fisica = $v;
            $this->modifiedColumns[] = AccesoMaterialPeer::FISICA_ID_FISICA;
        }

        if ($this->aFisica !== null && $this->aFisica->getIdFisica() !== $v) {
            $this->aFisica = null;
        }


        return $this;
    } // setFisicaIdFisica()

    /**
     * Set the value of [material_id_material] column.
     * 
     * @param      int $v new value
     * @return   AccesoMaterial The current object (for fluent API support)
     */
    public function setMaterialIdMaterial($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->material_id_material !== $v) {
            $this->material_id_material = $v;
            $this->modifiedColumns[] = AccesoMaterialPeer::MATERIAL_ID_MATERIAL;
        }

        if ($this->aMaterial !== null && $this->aMaterial->getIdMaterial() !== $v) {
            $this->aMaterial = null;
        }


        return $this;
    } // setMaterialIdMaterial()

    /**
     * Sets the value of [fecha_acceso] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   AccesoMaterial The current object (for fluent API support)
     */
    public function setFechaAcceso($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_acceso !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_acceso !== null && $tmpDt = new DateTime($this->fecha_acceso)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_acceso = $newDateAsString;
                $this->modifiedColumns[] = AccesoMaterialPeer::FECHA_ACCESO;
            }
        } // if either are not null


        return $this;
    } // setFechaAcceso()

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

            $this->id_acceso_material = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fisica_id_fisica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->material_id_material = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fecha_acceso = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = AccesoMaterialPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AccesoMaterial object", $e);
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

        if ($this->aFisica !== null && $this->fisica_id_fisica !== $this->aFisica->getIdFisica()) {
            $this->aFisica = null;
        }
        if ($this->aMaterial !== null && $this->material_id_material !== $this->aMaterial->getIdMaterial()) {
            $this->aMaterial = null;
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
            $con = Propel::getConnection(AccesoMaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AccesoMaterialPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aFisica = null;
            $this->aMaterial = null;
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
            $con = Propel::getConnection(AccesoMaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AccesoMaterialQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAccesoMaterial:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseAccesoMaterial:delete:post') as $callable)
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
            $con = Propel::getConnection(AccesoMaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAccesoMaterial:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseAccesoMaterial:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                AccesoMaterialPeer::addInstanceToPool($this);
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

            if ($this->aFisica !== null) {
                if ($this->aFisica->isModified() || $this->aFisica->isNew()) {
                    $affectedRows += $this->aFisica->save($con);
                }
                $this->setFisica($this->aFisica);
            }

            if ($this->aMaterial !== null) {
                if ($this->aMaterial->isModified() || $this->aMaterial->isNew()) {
                    $affectedRows += $this->aMaterial->save($con);
                }
                $this->setMaterial($this->aMaterial);
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

        $this->modifiedColumns[] = AccesoMaterialPeer::ID_ACCESO_MATERIAL;
        if (null !== $this->id_acceso_material) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AccesoMaterialPeer::ID_ACCESO_MATERIAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AccesoMaterialPeer::ID_ACCESO_MATERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACCESO_MATERIAL`';
        }
        if ($this->isColumnModified(AccesoMaterialPeer::FISICA_ID_FISICA)) {
            $modifiedColumns[':p' . $index++]  = '`FISICA_ID_FISICA`';
        }
        if ($this->isColumnModified(AccesoMaterialPeer::MATERIAL_ID_MATERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MATERIAL_ID_MATERIAL`';
        }
        if ($this->isColumnModified(AccesoMaterialPeer::FECHA_ACCESO)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_ACCESO`';
        }

        $sql = sprintf(
            'INSERT INTO `acceso_material` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ACCESO_MATERIAL`':						
						$stmt->bindValue($identifier, $this->id_acceso_material, PDO::PARAM_INT);
                        break;
                    case '`FISICA_ID_FISICA`':						
						$stmt->bindValue($identifier, $this->fisica_id_fisica, PDO::PARAM_INT);
                        break;
                    case '`MATERIAL_ID_MATERIAL`':						
						$stmt->bindValue($identifier, $this->material_id_material, PDO::PARAM_INT);
                        break;
                    case '`FECHA_ACCESO`':						
						$stmt->bindValue($identifier, $this->fecha_acceso, PDO::PARAM_STR);
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
        $this->setIdAccesoMaterial($pk);

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

            if ($this->aFisica !== null) {
                if (!$this->aFisica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFisica->getValidationFailures());
                }
            }

            if ($this->aMaterial !== null) {
                if (!$this->aMaterial->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMaterial->getValidationFailures());
                }
            }


            if (($retval = AccesoMaterialPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AccesoMaterialPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAccesoMaterial();
                break;
            case 1:
                return $this->getFisicaIdFisica();
                break;
            case 2:
                return $this->getMaterialIdMaterial();
                break;
            case 3:
                return $this->getFechaAcceso();
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
        if (isset($alreadyDumpedObjects['AccesoMaterial'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AccesoMaterial'][$this->getPrimaryKey()] = true;
        $keys = AccesoMaterialPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAccesoMaterial(),
            $keys[1] => $this->getFisicaIdFisica(),
            $keys[2] => $this->getMaterialIdMaterial(),
            $keys[3] => $this->getFechaAcceso(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aFisica) {
                $result['Fisica'] = $this->aFisica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMaterial) {
                $result['Material'] = $this->aMaterial->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = AccesoMaterialPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAccesoMaterial($value);
                break;
            case 1:
                $this->setFisicaIdFisica($value);
                break;
            case 2:
                $this->setMaterialIdMaterial($value);
                break;
            case 3:
                $this->setFechaAcceso($value);
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
        $keys = AccesoMaterialPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAccesoMaterial($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFisicaIdFisica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMaterialIdMaterial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFechaAcceso($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AccesoMaterialPeer::DATABASE_NAME);

        if ($this->isColumnModified(AccesoMaterialPeer::ID_ACCESO_MATERIAL)) $criteria->add(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $this->id_acceso_material);
        if ($this->isColumnModified(AccesoMaterialPeer::FISICA_ID_FISICA)) $criteria->add(AccesoMaterialPeer::FISICA_ID_FISICA, $this->fisica_id_fisica);
        if ($this->isColumnModified(AccesoMaterialPeer::MATERIAL_ID_MATERIAL)) $criteria->add(AccesoMaterialPeer::MATERIAL_ID_MATERIAL, $this->material_id_material);
        if ($this->isColumnModified(AccesoMaterialPeer::FECHA_ACCESO)) $criteria->add(AccesoMaterialPeer::FECHA_ACCESO, $this->fecha_acceso);

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
        $criteria = new Criteria(AccesoMaterialPeer::DATABASE_NAME);
        $criteria->add(AccesoMaterialPeer::ID_ACCESO_MATERIAL, $this->id_acceso_material);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAccesoMaterial();
    }

    /**
     * Generic method to set the primary key (id_acceso_material column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAccesoMaterial($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAccesoMaterial();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of AccesoMaterial (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFisicaIdFisica($this->getFisicaIdFisica());
        $copyObj->setMaterialIdMaterial($this->getMaterialIdMaterial());
        $copyObj->setFechaAcceso($this->getFechaAcceso());

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
            $copyObj->setIdAccesoMaterial(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 AccesoMaterial Clone of current object.
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
     * @return   AccesoMaterialPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AccesoMaterialPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Fisica object.
     *
     * @param                  Fisica $v
     * @return                 AccesoMaterial The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFisica(Fisica $v = null)
    {
        if ($v === null) {
            $this->setFisicaIdFisica(NULL);
        } else {
            $this->setFisicaIdFisica($v->getIdFisica());
        }

        $this->aFisica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Fisica object, it will not be re-added.
        if ($v !== null) {
            $v->addAccesoMaterial($this);
        }


        return $this;
    }


    /**
     * Get the associated Fisica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Fisica The associated Fisica object.
     * @throws PropelException
     */
    public function getFisica(PropelPDO $con = null)
    {
        if ($this->aFisica === null && ($this->fisica_id_fisica !== null)) {
            $this->aFisica = FisicaQuery::create()->findPk($this->fisica_id_fisica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFisica->addAccesoMaterials($this);
             */
        }

        return $this->aFisica;
    }

    /**
     * Declares an association between this object and a Material object.
     *
     * @param                  Material $v
     * @return                 AccesoMaterial The current object (for fluent API support)
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
            $v->addAccesoMaterial($this);
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
                $this->aMaterial->addAccesoMaterials($this);
             */
        }

        return $this->aMaterial;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_acceso_material = null;
        $this->fisica_id_fisica = null;
        $this->material_id_material = null;
        $this->fecha_acceso = null;
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

        $this->aFisica = null;
        $this->aMaterial = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AccesoMaterialPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseAccesoMaterial:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseAccesoMaterial