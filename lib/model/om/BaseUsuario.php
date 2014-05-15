<?php


/**
 * Base class that represents a row from the 'usuario' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUsuario extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'UsuarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsuarioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_usuario field.
     * @var        int
     */
    protected $id_usuario;

    /**
     * The value for the valido field.
     * @var        boolean
     */
    protected $valido;

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
     * The value for the admin field.
     * @var        boolean
     */
    protected $admin;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * @var        Pfisica
     */
    protected $aPfisica;

    /**
     * @var        PropelObjectCollection|AccesoMaterial[] Collection to store aggregation of AccesoMaterial objects.
     */
    protected $collAccesoMaterials;

    /**
     * @var        PropelObjectCollection|Anuncio[] Collection to store aggregation of Anuncio objects.
     */
    protected $collAnuncios;

    /**
     * @var        PropelObjectCollection|Aporte[] Collection to store aggregation of Aporte objects.
     */
    protected $collAportes;

    /**
     * @var        PropelObjectCollection|Lista[] Collection to store aggregation of Lista objects.
     */
    protected $collListas;

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
    protected $anunciosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $aportesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $listasScheduledForDeletion = null;

    /**
     * Get the [id_usuario] column value.
     * 
     * @return   int
     */
    public function getIdUsuario()
    {

        return $this->id_usuario;
    }

    /**
     * Get the [valido] column value.
     * 
     * @return   boolean
     */
    public function getValido()
    {

        return $this->valido;
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
     * Get the [admin] column value.
     * 
     * @return   boolean
     */
    public function getAdmin()
    {

        return $this->admin;
    }

    /**
     * Get the [email] column value.
     * 
     * @return   string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Set the value of [id_usuario] column.
     * 
     * @param      int $v new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_usuario !== $v) {
            $this->id_usuario = $v;
            $this->modifiedColumns[] = UsuarioPeer::ID_USUARIO;
        }

        if ($this->aPfisica !== null && $this->aPfisica->getIdPfisica() !== $v) {
            $this->aPfisica = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Sets the value of the [valido] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param      boolean|integer|string $v The new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setValido($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->valido !== $v) {
            $this->valido = $v;
            $this->modifiedColumns[] = UsuarioPeer::VALIDO;
        }


        return $this;
    } // setValido()

    /**
     * Set the value of [usuario] column.
     * 
     * @param      string $v new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setUsuario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario !== $v) {
            $this->usuario = $v;
            $this->modifiedColumns[] = UsuarioPeer::USUARIO;
        }


        return $this;
    } // setUsuario()

    /**
     * Set the value of [password] column.
     * 
     * @param      string $v new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = UsuarioPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Sets the value of the [admin] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param      boolean|integer|string $v The new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setAdmin($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->admin !== $v) {
            $this->admin = $v;
            $this->modifiedColumns[] = UsuarioPeer::ADMIN;
        }


        return $this;
    } // setAdmin()

    /**
     * Set the value of [email] column.
     * 
     * @param      string $v new value
     * @return   Usuario The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UsuarioPeer::EMAIL;
        }


        return $this;
    } // setEmail()

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

            $this->id_usuario = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->valido = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->usuario = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->password = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->admin = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = UsuarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Usuario object", $e);
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

        if ($this->aPfisica !== null && $this->id_usuario !== $this->aPfisica->getIdPfisica()) {
            $this->aPfisica = null;
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsuarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPfisica = null;
            $this->collAccesoMaterials = null;

            $this->collAnuncios = null;

            $this->collAportes = null;

            $this->collListas = null;

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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsuarioQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseUsuario:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseUsuario:delete:post') as $callable)
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseUsuario:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseUsuario:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                UsuarioPeer::addInstanceToPool($this);
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

            if ($this->anunciosScheduledForDeletion !== null) {
                if (!$this->anunciosScheduledForDeletion->isEmpty()) {
                    AnuncioQuery::create()
                        ->filterByPrimaryKeys($this->anunciosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->anunciosScheduledForDeletion = null;
                }
            }

            if ($this->collAnuncios !== null) {
                foreach ($this->collAnuncios as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->aportesScheduledForDeletion !== null) {
                if (!$this->aportesScheduledForDeletion->isEmpty()) {
                    AporteQuery::create()
                        ->filterByPrimaryKeys($this->aportesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->aportesScheduledForDeletion = null;
                }
            }

            if ($this->collAportes !== null) {
                foreach ($this->collAportes as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->listasScheduledForDeletion !== null) {
                if (!$this->listasScheduledForDeletion->isEmpty()) {
                    ListaQuery::create()
                        ->filterByPrimaryKeys($this->listasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->listasScheduledForDeletion = null;
                }
            }

            if ($this->collListas !== null) {
                foreach ($this->collListas as $referrerFK) {
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsuarioPeer::ID_USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_USUARIO`';
        }
        if ($this->isColumnModified(UsuarioPeer::VALIDO)) {
            $modifiedColumns[':p' . $index++]  = '`VALIDO`';
        }
        if ($this->isColumnModified(UsuarioPeer::USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`USUARIO`';
        }
        if ($this->isColumnModified(UsuarioPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`PASSWORD`';
        }
        if ($this->isColumnModified(UsuarioPeer::ADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ADMIN`';
        }
        if ($this->isColumnModified(UsuarioPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }

        $sql = sprintf(
            'INSERT INTO `usuario` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_USUARIO`':						
						$stmt->bindValue($identifier, $this->id_usuario, PDO::PARAM_INT);
                        break;
                    case '`VALIDO`':
						$stmt->bindValue($identifier, (int) $this->valido, PDO::PARAM_INT);
                        break;
                    case '`USUARIO`':						
						$stmt->bindValue($identifier, $this->usuario, PDO::PARAM_STR);
                        break;
                    case '`PASSWORD`':						
						$stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`ADMIN`':
						$stmt->bindValue($identifier, (int) $this->admin, PDO::PARAM_INT);
                        break;
                    case '`EMAIL`':						
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = UsuarioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAccesoMaterials !== null) {
                    foreach ($this->collAccesoMaterials as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAnuncios !== null) {
                    foreach ($this->collAnuncios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAportes !== null) {
                    foreach ($this->collAportes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collListas !== null) {
                    foreach ($this->collListas as $referrerFK) {
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdUsuario();
                break;
            case 1:
                return $this->getValido();
                break;
            case 2:
                return $this->getUsuario();
                break;
            case 3:
                return $this->getPassword();
                break;
            case 4:
                return $this->getAdmin();
                break;
            case 5:
                return $this->getEmail();
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
        if (isset($alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()] = true;
        $keys = UsuarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdUsuario(),
            $keys[1] => $this->getValido(),
            $keys[2] => $this->getUsuario(),
            $keys[3] => $this->getPassword(),
            $keys[4] => $this->getAdmin(),
            $keys[5] => $this->getEmail(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aPfisica) {
                $result['Pfisica'] = $this->aPfisica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAccesoMaterials) {
                $result['AccesoMaterials'] = $this->collAccesoMaterials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAnuncios) {
                $result['Anuncios'] = $this->collAnuncios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAportes) {
                $result['Aportes'] = $this->collAportes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collListas) {
                $result['Listas'] = $this->collListas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdUsuario($value);
                break;
            case 1:
                $this->setValido($value);
                break;
            case 2:
                $this->setUsuario($value);
                break;
            case 3:
                $this->setPassword($value);
                break;
            case 4:
                $this->setAdmin($value);
                break;
            case 5:
                $this->setEmail($value);
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
        $keys = UsuarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdUsuario($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setValido($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsuario($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPassword($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAdmin($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsuarioPeer::ID_USUARIO)) $criteria->add(UsuarioPeer::ID_USUARIO, $this->id_usuario);
        if ($this->isColumnModified(UsuarioPeer::VALIDO)) $criteria->add(UsuarioPeer::VALIDO, $this->valido);
        if ($this->isColumnModified(UsuarioPeer::USUARIO)) $criteria->add(UsuarioPeer::USUARIO, $this->usuario);
        if ($this->isColumnModified(UsuarioPeer::PASSWORD)) $criteria->add(UsuarioPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(UsuarioPeer::ADMIN)) $criteria->add(UsuarioPeer::ADMIN, $this->admin);
        if ($this->isColumnModified(UsuarioPeer::EMAIL)) $criteria->add(UsuarioPeer::EMAIL, $this->email);

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
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::ID_USUARIO, $this->id_usuario);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdUsuario();
    }

    /**
     * Generic method to set the primary key (id_usuario column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdUsuario($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdUsuario();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Usuario (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setValido($this->getValido());
        $copyObj->setUsuario($this->getUsuario());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setAdmin($this->getAdmin());
        $copyObj->setEmail($this->getEmail());

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

            foreach ($this->getAnuncios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAnuncio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAportes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAporte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getListas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLista($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getPfisica();
            if ($relObj) {
                $copyObj->setPfisica($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdUsuario(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Usuario Clone of current object.
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
     * @return   UsuarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsuarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Pfisica object.
     *
     * @param                  Pfisica $v
     * @return                 Usuario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPfisica(Pfisica $v = null)
    {
        if ($v === null) {
            $this->setIdUsuario(NULL);
        } else {
            $this->setIdUsuario($v->getIdPfisica());
        }

        $this->aPfisica = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setUsuario($this);
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
        if ($this->aPfisica === null && ($this->id_usuario !== null)) {
            $this->aPfisica = PfisicaQuery::create()->findPk($this->id_usuario, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aPfisica->setUsuario($this);
        }

        return $this->aPfisica;
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
        if ('Anuncio' == $relationName) {
            $this->initAnuncios();
        }
        if ('Aporte' == $relationName) {
            $this->initAportes();
        }
        if ('Lista' == $relationName) {
            $this->initListas();
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
            $accesoMaterialRemoved->setUsuario(null);
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
                    ->filterByUsuario($this)
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
     * @return   Usuario The current object (for fluent API support)
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
        $accesoMaterial->setUsuario($this);
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
            $accesoMaterial->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related AccesoMaterials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
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
     * Clears out the collAnuncios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAnuncios()
     */
    public function clearAnuncios()
    {
        $this->collAnuncios = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collAnuncios collection.
     *
     * By default this just sets the collAnuncios collection to an empty array (like clearcollAnuncios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAnuncios($overrideExisting = true)
    {
        if (null !== $this->collAnuncios && !$overrideExisting) {
            return;
        }
        $this->collAnuncios = new PropelObjectCollection();
        $this->collAnuncios->setModel('Anuncio');
    }

    /**
     * Gets an array of Anuncio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Anuncio[] List of Anuncio objects
     * @throws PropelException
     */
    public function getAnuncios($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAnuncios || null !== $criteria) {
            if ($this->isNew() && null === $this->collAnuncios) {
                // return empty collection
                $this->initAnuncios();
            } else {
                $collAnuncios = AnuncioQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAnuncios;
                }
                $this->collAnuncios = $collAnuncios;
            }
        }

        return $this->collAnuncios;
    }

    /**
     * Sets a collection of Anuncio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $anuncios A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setAnuncios(PropelCollection $anuncios, PropelPDO $con = null)
    {
        $this->anunciosScheduledForDeletion = $this->getAnuncios(new Criteria(), $con)->diff($anuncios);

        foreach ($this->anunciosScheduledForDeletion as $anuncioRemoved) {
            $anuncioRemoved->setUsuario(null);
        }

        $this->collAnuncios = null;
        foreach ($anuncios as $anuncio) {
            $this->addAnuncio($anuncio);
        }

        $this->collAnuncios = $anuncios;
    }

    /**
     * Returns the number of related Anuncio objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Anuncio objects.
     * @throws PropelException
     */
    public function countAnuncios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAnuncios || null !== $criteria) {
            if ($this->isNew() && null === $this->collAnuncios) {
                return 0;
            } else {
                $query = AnuncioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collAnuncios);
        }
    }

    /**
     * Method called to associate a Anuncio object to this object
     * through the Anuncio foreign key attribute.
     *
     * @param    Anuncio $l Anuncio
     * @return   Usuario The current object (for fluent API support)
     */
    public function addAnuncio(Anuncio $l)
    {
        if ($this->collAnuncios === null) {
            $this->initAnuncios();
        }
        if (!$this->collAnuncios->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAnuncio($l);
        }

        return $this;
    }

    /**
     * @param	Anuncio $anuncio The anuncio object to add.
     */
    protected function doAddAnuncio($anuncio)
    {
        $this->collAnuncios[]= $anuncio;
        $anuncio->setUsuario($this);
    }

    /**
     * @param	Anuncio $anuncio The anuncio object to remove.
     */
    public function removeAnuncio($anuncio)
    {
        if ($this->getAnuncios()->contains($anuncio)) {
            $this->collAnuncios->remove($this->collAnuncios->search($anuncio));
            if (null === $this->anunciosScheduledForDeletion) {
                $this->anunciosScheduledForDeletion = clone $this->collAnuncios;
                $this->anunciosScheduledForDeletion->clear();
            }
            $this->anunciosScheduledForDeletion[]= $anuncio;
            $anuncio->setUsuario(null);
        }
    }

    /**
     * Clears out the collAportes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAportes()
     */
    public function clearAportes()
    {
        $this->collAportes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collAportes collection.
     *
     * By default this just sets the collAportes collection to an empty array (like clearcollAportes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAportes($overrideExisting = true)
    {
        if (null !== $this->collAportes && !$overrideExisting) {
            return;
        }
        $this->collAportes = new PropelObjectCollection();
        $this->collAportes->setModel('Aporte');
    }

    /**
     * Gets an array of Aporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Aporte[] List of Aporte objects
     * @throws PropelException
     */
    public function getAportes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collAportes) {
                // return empty collection
                $this->initAportes();
            } else {
                $collAportes = AporteQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAportes;
                }
                $this->collAportes = $collAportes;
            }
        }

        return $this->collAportes;
    }

    /**
     * Sets a collection of Aporte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $aportes A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setAportes(PropelCollection $aportes, PropelPDO $con = null)
    {
        $this->aportesScheduledForDeletion = $this->getAportes(new Criteria(), $con)->diff($aportes);

        foreach ($this->aportesScheduledForDeletion as $aporteRemoved) {
            $aporteRemoved->setUsuario(null);
        }

        $this->collAportes = null;
        foreach ($aportes as $aporte) {
            $this->addAporte($aporte);
        }

        $this->collAportes = $aportes;
    }

    /**
     * Returns the number of related Aporte objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Aporte objects.
     * @throws PropelException
     */
    public function countAportes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collAportes) {
                return 0;
            } else {
                $query = AporteQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collAportes);
        }
    }

    /**
     * Method called to associate a Aporte object to this object
     * through the Aporte foreign key attribute.
     *
     * @param    Aporte $l Aporte
     * @return   Usuario The current object (for fluent API support)
     */
    public function addAporte(Aporte $l)
    {
        if ($this->collAportes === null) {
            $this->initAportes();
        }
        if (!$this->collAportes->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAporte($l);
        }

        return $this;
    }

    /**
     * @param	Aporte $aporte The aporte object to add.
     */
    protected function doAddAporte($aporte)
    {
        $this->collAportes[]= $aporte;
        $aporte->setUsuario($this);
    }

    /**
     * @param	Aporte $aporte The aporte object to remove.
     */
    public function removeAporte($aporte)
    {
        if ($this->getAportes()->contains($aporte)) {
            $this->collAportes->remove($this->collAportes->search($aporte));
            if (null === $this->aportesScheduledForDeletion) {
                $this->aportesScheduledForDeletion = clone $this->collAportes;
                $this->aportesScheduledForDeletion->clear();
            }
            $this->aportesScheduledForDeletion[]= $aporte;
            $aporte->setUsuario(null);
        }
    }

    /**
     * Clears out the collListas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addListas()
     */
    public function clearListas()
    {
        $this->collListas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collListas collection.
     *
     * By default this just sets the collListas collection to an empty array (like clearcollListas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initListas($overrideExisting = true)
    {
        if (null !== $this->collListas && !$overrideExisting) {
            return;
        }
        $this->collListas = new PropelObjectCollection();
        $this->collListas->setModel('Lista');
    }

    /**
     * Gets an array of Lista objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Lista[] List of Lista objects
     * @throws PropelException
     */
    public function getListas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collListas || null !== $criteria) {
            if ($this->isNew() && null === $this->collListas) {
                // return empty collection
                $this->initListas();
            } else {
                $collListas = ListaQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collListas;
                }
                $this->collListas = $collListas;
            }
        }

        return $this->collListas;
    }

    /**
     * Sets a collection of Lista objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $listas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setListas(PropelCollection $listas, PropelPDO $con = null)
    {
        $this->listasScheduledForDeletion = $this->getListas(new Criteria(), $con)->diff($listas);

        foreach ($this->listasScheduledForDeletion as $listaRemoved) {
            $listaRemoved->setUsuario(null);
        }

        $this->collListas = null;
        foreach ($listas as $lista) {
            $this->addLista($lista);
        }

        $this->collListas = $listas;
    }

    /**
     * Returns the number of related Lista objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Lista objects.
     * @throws PropelException
     */
    public function countListas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collListas || null !== $criteria) {
            if ($this->isNew() && null === $this->collListas) {
                return 0;
            } else {
                $query = ListaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collListas);
        }
    }

    /**
     * Method called to associate a Lista object to this object
     * through the Lista foreign key attribute.
     *
     * @param    Lista $l Lista
     * @return   Usuario The current object (for fluent API support)
     */
    public function addLista(Lista $l)
    {
        if ($this->collListas === null) {
            $this->initListas();
        }
        if (!$this->collListas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddLista($l);
        }

        return $this;
    }

    /**
     * @param	Lista $lista The lista object to add.
     */
    protected function doAddLista($lista)
    {
        $this->collListas[]= $lista;
        $lista->setUsuario($this);
    }

    /**
     * @param	Lista $lista The lista object to remove.
     */
    public function removeLista($lista)
    {
        if ($this->getListas()->contains($lista)) {
            $this->collListas->remove($this->collListas->search($lista));
            if (null === $this->listasScheduledForDeletion) {
                $this->listasScheduledForDeletion = clone $this->collListas;
                $this->listasScheduledForDeletion->clear();
            }
            $this->listasScheduledForDeletion[]= $lista;
            $lista->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related Listas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Lista[] List of Lista objects
     */
    public function getListasJoinMaterial($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ListaQuery::create(null, $criteria);
        $query->joinWith('Material', $join_behavior);

        return $this->getListas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_usuario = null;
        $this->valido = null;
        $this->usuario = null;
        $this->password = null;
        $this->admin = null;
        $this->email = null;
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
            if ($this->collAnuncios) {
                foreach ($this->collAnuncios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAportes) {
                foreach ($this->collAportes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collListas) {
                foreach ($this->collListas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collAccesoMaterials instanceof PropelCollection) {
            $this->collAccesoMaterials->clearIterator();
        }
        $this->collAccesoMaterials = null;
        if ($this->collAnuncios instanceof PropelCollection) {
            $this->collAnuncios->clearIterator();
        }
        $this->collAnuncios = null;
        if ($this->collAportes instanceof PropelCollection) {
            $this->collAportes->clearIterator();
        }
        $this->collAportes = null;
        if ($this->collListas instanceof PropelCollection) {
            $this->collListas->clearIterator();
        }
        $this->collListas = null;
        $this->aPfisica = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string The value of the 'usuario' column
     */
    public function __toString()
    {
        return (string) $this->getUsuario();
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseUsuario:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseUsuario
