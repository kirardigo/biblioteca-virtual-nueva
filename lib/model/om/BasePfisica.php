<?php


/**
 * Base class that represents a row from the 'pfisica' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePfisica extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'PfisicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfisicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_pfisica field.
     * @var        int
     */
    protected $id_pfisica;

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
     * The value for the varon field.
     * @var        boolean
     */
    protected $varon;

    /**
     * The value for the fecha_nac field.
     * @var        string
     */
    protected $fecha_nac;

    /**
     * The value for the tipo_doc_id_tipo_doc field.
     * @var        int
     */
    protected $tipo_doc_id_tipo_doc;

    /**
     * The value for the documento field.
     * @var        string
     */
    protected $documento;

    /**
     * @var        TipoDoc
     */
    protected $aTipoDoc;

    /**
     * @var        PropelObjectCollection|CarreraFisica[] Collection to store aggregation of CarreraFisica objects.
     */
    protected $collCarreraFisicas;

    /**
     * @var        PropelObjectCollection|Domicilio[] Collection to store aggregation of Domicilio objects.
     */
    protected $collDomicilios;

    /**
     * @var        Usuario one-to-one related Usuario object
     */
    protected $singleUsuario;

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
    protected $carreraFisicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $domiciliosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuariosScheduledForDeletion = null;

    /**
     * Get the [id_pfisica] column value.
     * 
     * @return   int
     */
    public function getIdPfisica()
    {

        return $this->id_pfisica;
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
     * Get the [varon] column value.
     * 
     * @return   boolean
     */
    public function getVaron()
    {

        return $this->varon;
    }

    /**
     * Get the [optionally formatted] temporal [fecha_nac] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaNac($format = 'Y-m-d')
    {
        if ($this->fecha_nac === null) {
            return null;
        }


        if ($this->fecha_nac === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_nac);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_nac, true), $x);
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
     * Get the [tipo_doc_id_tipo_doc] column value.
     * 
     * @return   int
     */
    public function getTipoDocIdTipoDoc()
    {

        return $this->tipo_doc_id_tipo_doc;
    }

    /**
     * Get the [documento] column value.
     * 
     * @return   string
     */
    public function getDocumento()
    {

        return $this->documento;
    }

    /**
     * Set the value of [id_pfisica] column.
     * 
     * @param      int $v new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setIdPfisica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_pfisica !== $v) {
            $this->id_pfisica = $v;
            $this->modifiedColumns[] = PfisicaPeer::ID_PFISICA;
        }


        return $this;
    } // setIdPfisica()

    /**
     * Set the value of [nombre] column.
     * 
     * @param      string $v new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = PfisicaPeer::NOMBRE;
        }


        return $this;
    } // setNombre()

    /**
     * Set the value of [apellido] column.
     * 
     * @param      string $v new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setApellido($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apellido !== $v) {
            $this->apellido = $v;
            $this->modifiedColumns[] = PfisicaPeer::APELLIDO;
        }


        return $this;
    } // setApellido()

    /**
     * Sets the value of the [varon] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param      boolean|integer|string $v The new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setVaron($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->varon !== $v) {
            $this->varon = $v;
            $this->modifiedColumns[] = PfisicaPeer::VARON;
        }


        return $this;
    } // setVaron()

    /**
     * Sets the value of [fecha_nac] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setFechaNac($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_nac !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_nac !== null && $tmpDt = new DateTime($this->fecha_nac)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_nac = $newDateAsString;
                $this->modifiedColumns[] = PfisicaPeer::FECHA_NAC;
            }
        } // if either are not null


        return $this;
    } // setFechaNac()

    /**
     * Set the value of [tipo_doc_id_tipo_doc] column.
     * 
     * @param      int $v new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setTipoDocIdTipoDoc($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tipo_doc_id_tipo_doc !== $v) {
            $this->tipo_doc_id_tipo_doc = $v;
            $this->modifiedColumns[] = PfisicaPeer::TIPO_DOC_ID_TIPO_DOC;
        }

        if ($this->aTipoDoc !== null && $this->aTipoDoc->getIdTipoDoc() !== $v) {
            $this->aTipoDoc = null;
        }


        return $this;
    } // setTipoDocIdTipoDoc()

    /**
     * Set the value of [documento] column.
     * 
     * @param      string $v new value
     * @return   Pfisica The current object (for fluent API support)
     */
    public function setDocumento($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->documento !== $v) {
            $this->documento = $v;
            $this->modifiedColumns[] = PfisicaPeer::DOCUMENTO;
        }


        return $this;
    } // setDocumento()

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

            $this->id_pfisica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->apellido = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->varon = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->fecha_nac = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->tipo_doc_id_tipo_doc = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->documento = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = PfisicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pfisica object", $e);
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

        if ($this->aTipoDoc !== null && $this->tipo_doc_id_tipo_doc !== $this->aTipoDoc->getIdTipoDoc()) {
            $this->aTipoDoc = null;
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
            $con = Propel::getConnection(PfisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfisicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTipoDoc = null;
            $this->collCarreraFisicas = null;

            $this->collDomicilios = null;

            $this->singleUsuario = null;

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
            $con = Propel::getConnection(PfisicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfisicaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePfisica:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePfisica:delete:post') as $callable)
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
            $con = Propel::getConnection(PfisicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePfisica:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePfisica:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                PfisicaPeer::addInstanceToPool($this);
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

            if ($this->aTipoDoc !== null) {
                if ($this->aTipoDoc->isModified() || $this->aTipoDoc->isNew()) {
                    $affectedRows += $this->aTipoDoc->save($con);
                }
                $this->setTipoDoc($this->aTipoDoc);
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

            if ($this->domiciliosScheduledForDeletion !== null) {
                if (!$this->domiciliosScheduledForDeletion->isEmpty()) {
                    DomicilioQuery::create()
                        ->filterByPrimaryKeys($this->domiciliosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->domiciliosScheduledForDeletion = null;
                }
            }

            if ($this->collDomicilios !== null) {
                foreach ($this->collDomicilios as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuariosScheduledForDeletion !== null) {
                if (!$this->usuariosScheduledForDeletion->isEmpty()) {
                    UsuarioQuery::create()
                        ->filterByPrimaryKeys($this->usuariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuariosScheduledForDeletion = null;
                }
            }

            if ($this->singleUsuario !== null) {
                if (!$this->singleUsuario->isDeleted()) {
                        $affectedRows += $this->singleUsuario->save($con);
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

        $this->modifiedColumns[] = PfisicaPeer::ID_PFISICA;
        if (null !== $this->id_pfisica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfisicaPeer::ID_PFISICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfisicaPeer::ID_PFISICA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PFISICA`';
        }
        if ($this->isColumnModified(PfisicaPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE`';
        }
        if ($this->isColumnModified(PfisicaPeer::APELLIDO)) {
            $modifiedColumns[':p' . $index++]  = '`APELLIDO`';
        }
        if ($this->isColumnModified(PfisicaPeer::VARON)) {
            $modifiedColumns[':p' . $index++]  = '`VARON`';
        }
        if ($this->isColumnModified(PfisicaPeer::FECHA_NAC)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_NAC`';
        }
        if ($this->isColumnModified(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC)) {
            $modifiedColumns[':p' . $index++]  = '`TIPO_DOC_ID_TIPO_DOC`';
        }
        if ($this->isColumnModified(PfisicaPeer::DOCUMENTO)) {
            $modifiedColumns[':p' . $index++]  = '`DOCUMENTO`';
        }

        $sql = sprintf(
            'INSERT INTO `pfisica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PFISICA`':						
						$stmt->bindValue($identifier, $this->id_pfisica, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE`':						
						$stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`APELLIDO`':						
						$stmt->bindValue($identifier, $this->apellido, PDO::PARAM_STR);
                        break;
                    case '`VARON`':
						$stmt->bindValue($identifier, (int) $this->varon, PDO::PARAM_INT);
                        break;
                    case '`FECHA_NAC`':						
						$stmt->bindValue($identifier, $this->fecha_nac, PDO::PARAM_STR);
                        break;
                    case '`TIPO_DOC_ID_TIPO_DOC`':						
						$stmt->bindValue($identifier, $this->tipo_doc_id_tipo_doc, PDO::PARAM_INT);
                        break;
                    case '`DOCUMENTO`':						
						$stmt->bindValue($identifier, $this->documento, PDO::PARAM_STR);
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
        $this->setIdPfisica($pk);

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

            if ($this->aTipoDoc !== null) {
                if (!$this->aTipoDoc->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipoDoc->getValidationFailures());
                }
            }


            if (($retval = PfisicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCarreraFisicas !== null) {
                    foreach ($this->collCarreraFisicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDomicilios !== null) {
                    foreach ($this->collDomicilios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleUsuario !== null) {
                    if (!$this->singleUsuario->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleUsuario->getValidationFailures());
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
        $pos = PfisicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPfisica();
                break;
            case 1:
                return $this->getNombre();
                break;
            case 2:
                return $this->getApellido();
                break;
            case 3:
                return $this->getVaron();
                break;
            case 4:
                return $this->getFechaNac();
                break;
            case 5:
                return $this->getTipoDocIdTipoDoc();
                break;
            case 6:
                return $this->getDocumento();
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
        if (isset($alreadyDumpedObjects['Pfisica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pfisica'][$this->getPrimaryKey()] = true;
        $keys = PfisicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPfisica(),
            $keys[1] => $this->getNombre(),
            $keys[2] => $this->getApellido(),
            $keys[3] => $this->getVaron(),
            $keys[4] => $this->getFechaNac(),
            $keys[5] => $this->getTipoDocIdTipoDoc(),
            $keys[6] => $this->getDocumento(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aTipoDoc) {
                $result['TipoDoc'] = $this->aTipoDoc->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCarreraFisicas) {
                $result['CarreraFisicas'] = $this->collCarreraFisicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDomicilios) {
                $result['Domicilios'] = $this->collDomicilios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleUsuario) {
                $result['Usuario'] = $this->singleUsuario->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
        $pos = PfisicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPfisica($value);
                break;
            case 1:
                $this->setNombre($value);
                break;
            case 2:
                $this->setApellido($value);
                break;
            case 3:
                $this->setVaron($value);
                break;
            case 4:
                $this->setFechaNac($value);
                break;
            case 5:
                $this->setTipoDocIdTipoDoc($value);
                break;
            case 6:
                $this->setDocumento($value);
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
        $keys = PfisicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPfisica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setApellido($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVaron($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFechaNac($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTipoDocIdTipoDoc($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDocumento($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfisicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfisicaPeer::ID_PFISICA)) $criteria->add(PfisicaPeer::ID_PFISICA, $this->id_pfisica);
        if ($this->isColumnModified(PfisicaPeer::NOMBRE)) $criteria->add(PfisicaPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(PfisicaPeer::APELLIDO)) $criteria->add(PfisicaPeer::APELLIDO, $this->apellido);
        if ($this->isColumnModified(PfisicaPeer::VARON)) $criteria->add(PfisicaPeer::VARON, $this->varon);
        if ($this->isColumnModified(PfisicaPeer::FECHA_NAC)) $criteria->add(PfisicaPeer::FECHA_NAC, $this->fecha_nac);
        if ($this->isColumnModified(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC)) $criteria->add(PfisicaPeer::TIPO_DOC_ID_TIPO_DOC, $this->tipo_doc_id_tipo_doc);
        if ($this->isColumnModified(PfisicaPeer::DOCUMENTO)) $criteria->add(PfisicaPeer::DOCUMENTO, $this->documento);

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
        $criteria = new Criteria(PfisicaPeer::DATABASE_NAME);
        $criteria->add(PfisicaPeer::ID_PFISICA, $this->id_pfisica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPfisica();
    }

    /**
     * Generic method to set the primary key (id_pfisica column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPfisica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPfisica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Pfisica (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombre($this->getNombre());
        $copyObj->setApellido($this->getApellido());
        $copyObj->setVaron($this->getVaron());
        $copyObj->setFechaNac($this->getFechaNac());
        $copyObj->setTipoDocIdTipoDoc($this->getTipoDocIdTipoDoc());
        $copyObj->setDocumento($this->getDocumento());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCarreraFisicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCarreraFisica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDomicilios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDomicilio($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getUsuario();
            if ($relObj) {
                $copyObj->setUsuario($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPfisica(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Pfisica Clone of current object.
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
     * @return   PfisicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfisicaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a TipoDoc object.
     *
     * @param                  TipoDoc $v
     * @return                 Pfisica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipoDoc(TipoDoc $v = null)
    {
        if ($v === null) {
            $this->setTipoDocIdTipoDoc(NULL);
        } else {
            $this->setTipoDocIdTipoDoc($v->getIdTipoDoc());
        }

        $this->aTipoDoc = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TipoDoc object, it will not be re-added.
        if ($v !== null) {
            $v->addPfisica($this);
        }


        return $this;
    }


    /**
     * Get the associated TipoDoc object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 TipoDoc The associated TipoDoc object.
     * @throws PropelException
     */
    public function getTipoDoc(PropelPDO $con = null)
    {
        if ($this->aTipoDoc === null && ($this->tipo_doc_id_tipo_doc !== null)) {
            $this->aTipoDoc = TipoDocQuery::create()->findPk($this->tipo_doc_id_tipo_doc, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipoDoc->addPfisicas($this);
             */
        }

        return $this->aTipoDoc;
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
        if ('CarreraFisica' == $relationName) {
            $this->initCarreraFisicas();
        }
        if ('Domicilio' == $relationName) {
            $this->initDomicilios();
        }
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
     * If this Pfisica is new, it will return
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
                    ->filterByPfisica($this)
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
            $carreraFisicaRemoved->setPfisica(null);
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
                    ->filterByPfisica($this)
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
     * @return   Pfisica The current object (for fluent API support)
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
        $carreraFisica->setPfisica($this);
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
            $carreraFisica->setPfisica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pfisica is new, it will return
     * an empty collection; or if this Pfisica has previously
     * been saved, it will retrieve related CarreraFisicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pfisica.
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
     * Clears out the collDomicilios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDomicilios()
     */
    public function clearDomicilios()
    {
        $this->collDomicilios = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collDomicilios collection.
     *
     * By default this just sets the collDomicilios collection to an empty array (like clearcollDomicilios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDomicilios($overrideExisting = true)
    {
        if (null !== $this->collDomicilios && !$overrideExisting) {
            return;
        }
        $this->collDomicilios = new PropelObjectCollection();
        $this->collDomicilios->setModel('Domicilio');
    }

    /**
     * Gets an array of Domicilio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Pfisica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Domicilio[] List of Domicilio objects
     * @throws PropelException
     */
    public function getDomicilios($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collDomicilios || null !== $criteria) {
            if ($this->isNew() && null === $this->collDomicilios) {
                // return empty collection
                $this->initDomicilios();
            } else {
                $collDomicilios = DomicilioQuery::create(null, $criteria)
                    ->filterByPfisica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collDomicilios;
                }
                $this->collDomicilios = $collDomicilios;
            }
        }

        return $this->collDomicilios;
    }

    /**
     * Sets a collection of Domicilio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $domicilios A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setDomicilios(PropelCollection $domicilios, PropelPDO $con = null)
    {
        $this->domiciliosScheduledForDeletion = $this->getDomicilios(new Criteria(), $con)->diff($domicilios);

        foreach ($this->domiciliosScheduledForDeletion as $domicilioRemoved) {
            $domicilioRemoved->setPfisica(null);
        }

        $this->collDomicilios = null;
        foreach ($domicilios as $domicilio) {
            $this->addDomicilio($domicilio);
        }

        $this->collDomicilios = $domicilios;
    }

    /**
     * Returns the number of related Domicilio objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Domicilio objects.
     * @throws PropelException
     */
    public function countDomicilios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collDomicilios || null !== $criteria) {
            if ($this->isNew() && null === $this->collDomicilios) {
                return 0;
            } else {
                $query = DomicilioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPfisica($this)
                    ->count($con);
            }
        } else {
            return count($this->collDomicilios);
        }
    }

    /**
     * Method called to associate a Domicilio object to this object
     * through the Domicilio foreign key attribute.
     *
     * @param    Domicilio $l Domicilio
     * @return   Pfisica The current object (for fluent API support)
     */
    public function addDomicilio(Domicilio $l)
    {
        if ($this->collDomicilios === null) {
            $this->initDomicilios();
        }
        if (!$this->collDomicilios->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddDomicilio($l);
        }

        return $this;
    }

    /**
     * @param	Domicilio $domicilio The domicilio object to add.
     */
    protected function doAddDomicilio($domicilio)
    {
        $this->collDomicilios[]= $domicilio;
        $domicilio->setPfisica($this);
    }

    /**
     * @param	Domicilio $domicilio The domicilio object to remove.
     */
    public function removeDomicilio($domicilio)
    {
        if ($this->getDomicilios()->contains($domicilio)) {
            $this->collDomicilios->remove($this->collDomicilios->search($domicilio));
            if (null === $this->domiciliosScheduledForDeletion) {
                $this->domiciliosScheduledForDeletion = clone $this->collDomicilios;
                $this->domiciliosScheduledForDeletion->clear();
            }
            $this->domiciliosScheduledForDeletion[]= $domicilio;
            $domicilio->setPfisica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pfisica is new, it will return
     * an empty collection; or if this Pfisica has previously
     * been saved, it will retrieve related Domicilios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pfisica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Domicilio[] List of Domicilio objects
     */
    public function getDomiciliosJoinLocalidad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DomicilioQuery::create(null, $criteria);
        $query->joinWith('Localidad', $join_behavior);

        return $this->getDomicilios($query, $con);
    }

    /**
     * Gets a single Usuario object, which is related to this object by a one-to-one relationship.
     *
     * @param      PropelPDO $con optional connection object
     * @return                 Usuario
     * @throws PropelException
     */
    public function getUsuario(PropelPDO $con = null)
    {

        if ($this->singleUsuario === null && !$this->isNew()) {
            $this->singleUsuario = UsuarioQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleUsuario;
    }

    /**
     * Sets a single Usuario object as related to this object by a one-to-one relationship.
     *
     * @param                  Usuario $v Usuario
     * @return                 Pfisica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        $this->singleUsuario = $v;

        // Make sure that that the passed-in Usuario isn't already associated with this object
        if ($v !== null && $v->getPfisica() === null) {
            $v->setPfisica($this);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_pfisica = null;
        $this->nombre = null;
        $this->apellido = null;
        $this->varon = null;
        $this->fecha_nac = null;
        $this->tipo_doc_id_tipo_doc = null;
        $this->documento = null;
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
            if ($this->collCarreraFisicas) {
                foreach ($this->collCarreraFisicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDomicilios) {
                foreach ($this->collDomicilios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleUsuario) {
                $this->singleUsuario->clearAllReferences($deep);
            }
        } // if ($deep)

        if ($this->collCarreraFisicas instanceof PropelCollection) {
            $this->collCarreraFisicas->clearIterator();
        }
        $this->collCarreraFisicas = null;
        if ($this->collDomicilios instanceof PropelCollection) {
            $this->collDomicilios->clearIterator();
        }
        $this->collDomicilios = null;
        if ($this->singleUsuario instanceof PropelCollection) {
            $this->singleUsuario->clearIterator();
        }
        $this->singleUsuario = null;
        $this->aTipoDoc = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PfisicaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePfisica:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BasePfisica
