<?php


/**
 * Base class that represents a row from the 'material' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMaterial extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'MaterialPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MaterialPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_material field.
     * @var        int
     */
    protected $id_material;

    /**
     * The value for the archivo field.
     * @var        string
     */
    protected $archivo;

    /**
     * The value for the titulo field.
     * @var        string
     */
    protected $titulo;

    /**
     * The value for the editorial field.
     * @var        string
     */
    protected $editorial;

    /**
     * The value for the autor field.
     * @var        string
     */
    protected $autor;

    /**
     * The value for the descripcion field.
     * @var        string
     */
    protected $descripcion;

    /**
     * The value for the fisico field.
     * @var        boolean
     */
    protected $fisico;

    /**
     * The value for the tema_id_tema field.
     * @var        int
     */
    protected $tema_id_tema;

    /**
     * The value for the biblioteca_id_biblioteca field.
     * @var        int
     */
    protected $biblioteca_id_biblioteca;

    /**
     * The value for the carrera_id_carrera field.
     * @var        int
     */
    protected $carrera_id_carrera;

    /**
     * @var        Tema
     */
    protected $aTema;

    /**
     * @var        Biblioteca
     */
    protected $aBiblioteca;

    /**
     * @var        Carrera
     */
    protected $aCarrera;

    /**
     * @var        PropelObjectCollection|AccesoMaterial[] Collection to store aggregation of AccesoMaterial objects.
     */
    protected $collAccesoMaterials;

    /**
     * @var        PropelObjectCollection|MaterialAporte[] Collection to store aggregation of MaterialAporte objects.
     */
    protected $collMaterialAportes;

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
    protected $materialAportesScheduledForDeletion = null;

    /**
     * Get the [id_material] column value.
     * 
     * @return   int
     */
    public function getIdMaterial()
    {

        return $this->id_material;
    }

    /**
     * Get the [archivo] column value.
     * 
     * @return   string
     */
    public function getArchivo()
    {

        return $this->archivo;
    }

    /**
     * Get the [titulo] column value.
     * 
     * @return   string
     */
    public function getTitulo()
    {

        return $this->titulo;
    }

    /**
     * Get the [editorial] column value.
     * 
     * @return   string
     */
    public function getEditorial()
    {

        return $this->editorial;
    }

    /**
     * Get the [autor] column value.
     * 
     * @return   string
     */
    public function getAutor()
    {

        return $this->autor;
    }

    /**
     * Get the [descripcion] column value.
     * 
     * @return   string
     */
    public function getDescripcion()
    {

        return $this->descripcion;
    }

    /**
     * Get the [fisico] column value.
     * 
     * @return   boolean
     */
    public function getFisico()
    {

        return $this->fisico;
    }

    /**
     * Get the [tema_id_tema] column value.
     * 
     * @return   int
     */
    public function getTemaIdTema()
    {

        return $this->tema_id_tema;
    }

    /**
     * Get the [biblioteca_id_biblioteca] column value.
     * 
     * @return   int
     */
    public function getBibliotecaIdBiblioteca()
    {

        return $this->biblioteca_id_biblioteca;
    }

    /**
     * Get the [carrera_id_carrera] column value.
     * 
     * @return   int
     */
    public function getCarreraIdCarrera()
    {

        return $this->carrera_id_carrera;
    }

    /**
     * Set the value of [id_material] column.
     * 
     * @param      int $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setIdMaterial($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_material !== $v) {
            $this->id_material = $v;
            $this->modifiedColumns[] = MaterialPeer::ID_MATERIAL;
        }


        return $this;
    } // setIdMaterial()

    /**
     * Set the value of [archivo] column.
     * 
     * @param      string $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setArchivo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->archivo !== $v) {
            $this->archivo = $v;
            $this->modifiedColumns[] = MaterialPeer::ARCHIVO;
        }


        return $this;
    } // setArchivo()

    /**
     * Set the value of [titulo] column.
     * 
     * @param      string $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setTitulo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->titulo !== $v) {
            $this->titulo = $v;
            $this->modifiedColumns[] = MaterialPeer::TITULO;
        }


        return $this;
    } // setTitulo()

    /**
     * Set the value of [editorial] column.
     * 
     * @param      string $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setEditorial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->editorial !== $v) {
            $this->editorial = $v;
            $this->modifiedColumns[] = MaterialPeer::EDITORIAL;
        }


        return $this;
    } // setEditorial()

    /**
     * Set the value of [autor] column.
     * 
     * @param      string $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setAutor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->autor !== $v) {
            $this->autor = $v;
            $this->modifiedColumns[] = MaterialPeer::AUTOR;
        }


        return $this;
    } // setAutor()

    /**
     * Set the value of [descripcion] column.
     * 
     * @param      string $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = MaterialPeer::DESCRIPCION;
        }


        return $this;
    } // setDescripcion()

    /**
     * Sets the value of the [fisico] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param      boolean|integer|string $v The new value
     * @return   Material The current object (for fluent API support)
     */
    public function setFisico($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->fisico !== $v) {
            $this->fisico = $v;
            $this->modifiedColumns[] = MaterialPeer::FISICO;
        }


        return $this;
    } // setFisico()

    /**
     * Set the value of [tema_id_tema] column.
     * 
     * @param      int $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setTemaIdTema($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tema_id_tema !== $v) {
            $this->tema_id_tema = $v;
            $this->modifiedColumns[] = MaterialPeer::TEMA_ID_TEMA;
        }

        if ($this->aTema !== null && $this->aTema->getIdTema() !== $v) {
            $this->aTema = null;
        }


        return $this;
    } // setTemaIdTema()

    /**
     * Set the value of [biblioteca_id_biblioteca] column.
     * 
     * @param      int $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setBibliotecaIdBiblioteca($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->biblioteca_id_biblioteca !== $v) {
            $this->biblioteca_id_biblioteca = $v;
            $this->modifiedColumns[] = MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA;
        }

        if ($this->aBiblioteca !== null && $this->aBiblioteca->getIdBiblioteca() !== $v) {
            $this->aBiblioteca = null;
        }


        return $this;
    } // setBibliotecaIdBiblioteca()

    /**
     * Set the value of [carrera_id_carrera] column.
     * 
     * @param      int $v new value
     * @return   Material The current object (for fluent API support)
     */
    public function setCarreraIdCarrera($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->carrera_id_carrera !== $v) {
            $this->carrera_id_carrera = $v;
            $this->modifiedColumns[] = MaterialPeer::CARRERA_ID_CARRERA;
        }

        if ($this->aCarrera !== null && $this->aCarrera->getIdCarrera() !== $v) {
            $this->aCarrera = null;
        }


        return $this;
    } // setCarreraIdCarrera()

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

            $this->id_material = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->archivo = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->titulo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->editorial = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->autor = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->descripcion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->fisico = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->tema_id_tema = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->biblioteca_id_biblioteca = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->carrera_id_carrera = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = MaterialPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Material object", $e);
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

        if ($this->aTema !== null && $this->tema_id_tema !== $this->aTema->getIdTema()) {
            $this->aTema = null;
        }
        if ($this->aBiblioteca !== null && $this->biblioteca_id_biblioteca !== $this->aBiblioteca->getIdBiblioteca()) {
            $this->aBiblioteca = null;
        }
        if ($this->aCarrera !== null && $this->carrera_id_carrera !== $this->aCarrera->getIdCarrera()) {
            $this->aCarrera = null;
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
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MaterialPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTema = null;
            $this->aBiblioteca = null;
            $this->aCarrera = null;
            $this->collAccesoMaterials = null;

            $this->collMaterialAportes = null;

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
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MaterialQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseMaterial:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseMaterial:delete:post') as $callable)
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
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseMaterial:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseMaterial:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                MaterialPeer::addInstanceToPool($this);
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

            if ($this->aTema !== null) {
                if ($this->aTema->isModified() || $this->aTema->isNew()) {
                    $affectedRows += $this->aTema->save($con);
                }
                $this->setTema($this->aTema);
            }

            if ($this->aBiblioteca !== null) {
                if ($this->aBiblioteca->isModified() || $this->aBiblioteca->isNew()) {
                    $affectedRows += $this->aBiblioteca->save($con);
                }
                $this->setBiblioteca($this->aBiblioteca);
            }

            if ($this->aCarrera !== null) {
                if ($this->aCarrera->isModified() || $this->aCarrera->isNew()) {
                    $affectedRows += $this->aCarrera->save($con);
                }
                $this->setCarrera($this->aCarrera);
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

            if ($this->materialAportesScheduledForDeletion !== null) {
                if (!$this->materialAportesScheduledForDeletion->isEmpty()) {
                    MaterialAporteQuery::create()
                        ->filterByPrimaryKeys($this->materialAportesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->materialAportesScheduledForDeletion = null;
                }
            }

            if ($this->collMaterialAportes !== null) {
                foreach ($this->collMaterialAportes as $referrerFK) {
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

        $this->modifiedColumns[] = MaterialPeer::ID_MATERIAL;
        if (null !== $this->id_material) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MaterialPeer::ID_MATERIAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MaterialPeer::ID_MATERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_MATERIAL`';
        }
        if ($this->isColumnModified(MaterialPeer::ARCHIVO)) {
            $modifiedColumns[':p' . $index++]  = '`ARCHIVO`';
        }
        if ($this->isColumnModified(MaterialPeer::TITULO)) {
            $modifiedColumns[':p' . $index++]  = '`TITULO`';
        }
        if ($this->isColumnModified(MaterialPeer::EDITORIAL)) {
            $modifiedColumns[':p' . $index++]  = '`EDITORIAL`';
        }
        if ($this->isColumnModified(MaterialPeer::AUTOR)) {
            $modifiedColumns[':p' . $index++]  = '`AUTOR`';
        }
        if ($this->isColumnModified(MaterialPeer::DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`DESCRIPCION`';
        }
        if ($this->isColumnModified(MaterialPeer::FISICO)) {
            $modifiedColumns[':p' . $index++]  = '`FISICO`';
        }
        if ($this->isColumnModified(MaterialPeer::TEMA_ID_TEMA)) {
            $modifiedColumns[':p' . $index++]  = '`TEMA_ID_TEMA`';
        }
        if ($this->isColumnModified(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA)) {
            $modifiedColumns[':p' . $index++]  = '`BIBLIOTECA_ID_BIBLIOTECA`';
        }
        if ($this->isColumnModified(MaterialPeer::CARRERA_ID_CARRERA)) {
            $modifiedColumns[':p' . $index++]  = '`CARRERA_ID_CARRERA`';
        }

        $sql = sprintf(
            'INSERT INTO `material` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_MATERIAL`':						
						$stmt->bindValue($identifier, $this->id_material, PDO::PARAM_INT);
                        break;
                    case '`ARCHIVO`':						
						$stmt->bindValue($identifier, $this->archivo, PDO::PARAM_STR);
                        break;
                    case '`TITULO`':						
						$stmt->bindValue($identifier, $this->titulo, PDO::PARAM_STR);
                        break;
                    case '`EDITORIAL`':						
						$stmt->bindValue($identifier, $this->editorial, PDO::PARAM_STR);
                        break;
                    case '`AUTOR`':						
						$stmt->bindValue($identifier, $this->autor, PDO::PARAM_STR);
                        break;
                    case '`DESCRIPCION`':						
						$stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
                        break;
                    case '`FISICO`':
						$stmt->bindValue($identifier, (int) $this->fisico, PDO::PARAM_INT);
                        break;
                    case '`TEMA_ID_TEMA`':						
						$stmt->bindValue($identifier, $this->tema_id_tema, PDO::PARAM_INT);
                        break;
                    case '`BIBLIOTECA_ID_BIBLIOTECA`':						
						$stmt->bindValue($identifier, $this->biblioteca_id_biblioteca, PDO::PARAM_INT);
                        break;
                    case '`CARRERA_ID_CARRERA`':						
						$stmt->bindValue($identifier, $this->carrera_id_carrera, PDO::PARAM_INT);
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
        $this->setIdMaterial($pk);

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

            if ($this->aTema !== null) {
                if (!$this->aTema->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTema->getValidationFailures());
                }
            }

            if ($this->aBiblioteca !== null) {
                if (!$this->aBiblioteca->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBiblioteca->getValidationFailures());
                }
            }

            if ($this->aCarrera !== null) {
                if (!$this->aCarrera->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCarrera->getValidationFailures());
                }
            }


            if (($retval = MaterialPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAccesoMaterials !== null) {
                    foreach ($this->collAccesoMaterials as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collMaterialAportes !== null) {
                    foreach ($this->collMaterialAportes as $referrerFK) {
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
        $pos = MaterialPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdMaterial();
                break;
            case 1:
                return $this->getArchivo();
                break;
            case 2:
                return $this->getTitulo();
                break;
            case 3:
                return $this->getEditorial();
                break;
            case 4:
                return $this->getAutor();
                break;
            case 5:
                return $this->getDescripcion();
                break;
            case 6:
                return $this->getFisico();
                break;
            case 7:
                return $this->getTemaIdTema();
                break;
            case 8:
                return $this->getBibliotecaIdBiblioteca();
                break;
            case 9:
                return $this->getCarreraIdCarrera();
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
        if (isset($alreadyDumpedObjects['Material'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Material'][$this->getPrimaryKey()] = true;
        $keys = MaterialPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdMaterial(),
            $keys[1] => $this->getArchivo(),
            $keys[2] => $this->getTitulo(),
            $keys[3] => $this->getEditorial(),
            $keys[4] => $this->getAutor(),
            $keys[5] => $this->getDescripcion(),
            $keys[6] => $this->getFisico(),
            $keys[7] => $this->getTemaIdTema(),
            $keys[8] => $this->getBibliotecaIdBiblioteca(),
            $keys[9] => $this->getCarreraIdCarrera(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aTema) {
                $result['Tema'] = $this->aTema->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBiblioteca) {
                $result['Biblioteca'] = $this->aBiblioteca->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCarrera) {
                $result['Carrera'] = $this->aCarrera->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAccesoMaterials) {
                $result['AccesoMaterials'] = $this->collAccesoMaterials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMaterialAportes) {
                $result['MaterialAportes'] = $this->collMaterialAportes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MaterialPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdMaterial($value);
                break;
            case 1:
                $this->setArchivo($value);
                break;
            case 2:
                $this->setTitulo($value);
                break;
            case 3:
                $this->setEditorial($value);
                break;
            case 4:
                $this->setAutor($value);
                break;
            case 5:
                $this->setDescripcion($value);
                break;
            case 6:
                $this->setFisico($value);
                break;
            case 7:
                $this->setTemaIdTema($value);
                break;
            case 8:
                $this->setBibliotecaIdBiblioteca($value);
                break;
            case 9:
                $this->setCarreraIdCarrera($value);
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
        $keys = MaterialPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdMaterial($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setArchivo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTitulo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEditorial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAutor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescripcion($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFisico($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTemaIdTema($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setBibliotecaIdBiblioteca($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCarreraIdCarrera($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MaterialPeer::DATABASE_NAME);

        if ($this->isColumnModified(MaterialPeer::ID_MATERIAL)) $criteria->add(MaterialPeer::ID_MATERIAL, $this->id_material);
        if ($this->isColumnModified(MaterialPeer::ARCHIVO)) $criteria->add(MaterialPeer::ARCHIVO, $this->archivo);
        if ($this->isColumnModified(MaterialPeer::TITULO)) $criteria->add(MaterialPeer::TITULO, $this->titulo);
        if ($this->isColumnModified(MaterialPeer::EDITORIAL)) $criteria->add(MaterialPeer::EDITORIAL, $this->editorial);
        if ($this->isColumnModified(MaterialPeer::AUTOR)) $criteria->add(MaterialPeer::AUTOR, $this->autor);
        if ($this->isColumnModified(MaterialPeer::DESCRIPCION)) $criteria->add(MaterialPeer::DESCRIPCION, $this->descripcion);
        if ($this->isColumnModified(MaterialPeer::FISICO)) $criteria->add(MaterialPeer::FISICO, $this->fisico);
        if ($this->isColumnModified(MaterialPeer::TEMA_ID_TEMA)) $criteria->add(MaterialPeer::TEMA_ID_TEMA, $this->tema_id_tema);
        if ($this->isColumnModified(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA)) $criteria->add(MaterialPeer::BIBLIOTECA_ID_BIBLIOTECA, $this->biblioteca_id_biblioteca);
        if ($this->isColumnModified(MaterialPeer::CARRERA_ID_CARRERA)) $criteria->add(MaterialPeer::CARRERA_ID_CARRERA, $this->carrera_id_carrera);

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
        $criteria = new Criteria(MaterialPeer::DATABASE_NAME);
        $criteria->add(MaterialPeer::ID_MATERIAL, $this->id_material);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdMaterial();
    }

    /**
     * Generic method to set the primary key (id_material column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdMaterial($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdMaterial();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Material (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArchivo($this->getArchivo());
        $copyObj->setTitulo($this->getTitulo());
        $copyObj->setEditorial($this->getEditorial());
        $copyObj->setAutor($this->getAutor());
        $copyObj->setDescripcion($this->getDescripcion());
        $copyObj->setFisico($this->getFisico());
        $copyObj->setTemaIdTema($this->getTemaIdTema());
        $copyObj->setBibliotecaIdBiblioteca($this->getBibliotecaIdBiblioteca());
        $copyObj->setCarreraIdCarrera($this->getCarreraIdCarrera());

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

            foreach ($this->getMaterialAportes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMaterialAporte($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdMaterial(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Material Clone of current object.
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
     * @return   MaterialPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MaterialPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Tema object.
     *
     * @param                  Tema $v
     * @return                 Material The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTema(Tema $v = null)
    {
        if ($v === null) {
            $this->setTemaIdTema(NULL);
        } else {
            $this->setTemaIdTema($v->getIdTema());
        }

        $this->aTema = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tema object, it will not be re-added.
        if ($v !== null) {
            $v->addMaterial($this);
        }


        return $this;
    }


    /**
     * Get the associated Tema object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Tema The associated Tema object.
     * @throws PropelException
     */
    public function getTema(PropelPDO $con = null)
    {
        if ($this->aTema === null && ($this->tema_id_tema !== null)) {
            $this->aTema = TemaQuery::create()->findPk($this->tema_id_tema, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTema->addMaterials($this);
             */
        }

        return $this->aTema;
    }

    /**
     * Declares an association between this object and a Biblioteca object.
     *
     * @param                  Biblioteca $v
     * @return                 Material The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBiblioteca(Biblioteca $v = null)
    {
        if ($v === null) {
            $this->setBibliotecaIdBiblioteca(NULL);
        } else {
            $this->setBibliotecaIdBiblioteca($v->getIdBiblioteca());
        }

        $this->aBiblioteca = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Biblioteca object, it will not be re-added.
        if ($v !== null) {
            $v->addMaterial($this);
        }


        return $this;
    }


    /**
     * Get the associated Biblioteca object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Biblioteca The associated Biblioteca object.
     * @throws PropelException
     */
    public function getBiblioteca(PropelPDO $con = null)
    {
        if ($this->aBiblioteca === null && ($this->biblioteca_id_biblioteca !== null)) {
            $this->aBiblioteca = BibliotecaQuery::create()->findPk($this->biblioteca_id_biblioteca, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBiblioteca->addMaterials($this);
             */
        }

        return $this->aBiblioteca;
    }

    /**
     * Declares an association between this object and a Carrera object.
     *
     * @param                  Carrera $v
     * @return                 Material The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCarrera(Carrera $v = null)
    {
        if ($v === null) {
            $this->setCarreraIdCarrera(NULL);
        } else {
            $this->setCarreraIdCarrera($v->getIdCarrera());
        }

        $this->aCarrera = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Carrera object, it will not be re-added.
        if ($v !== null) {
            $v->addMaterial($this);
        }


        return $this;
    }


    /**
     * Get the associated Carrera object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 Carrera The associated Carrera object.
     * @throws PropelException
     */
    public function getCarrera(PropelPDO $con = null)
    {
        if ($this->aCarrera === null && ($this->carrera_id_carrera !== null)) {
            $this->aCarrera = CarreraQuery::create()->findPk($this->carrera_id_carrera, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCarrera->addMaterials($this);
             */
        }

        return $this->aCarrera;
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
        if ('MaterialAporte' == $relationName) {
            $this->initMaterialAportes();
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
     * If this Material is new, it will return
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
                    ->filterByMaterial($this)
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
            $accesoMaterialRemoved->setMaterial(null);
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
                    ->filterByMaterial($this)
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
     * @return   Material The current object (for fluent API support)
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
        $accesoMaterial->setMaterial($this);
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
            $accesoMaterial->setMaterial(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Material is new, it will return
     * an empty collection; or if this Material has previously
     * been saved, it will retrieve related AccesoMaterials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Material.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AccesoMaterial[] List of AccesoMaterial objects
     */
    public function getAccesoMaterialsJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AccesoMaterialQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getAccesoMaterials($query, $con);
    }

    /**
     * Clears out the collMaterialAportes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addMaterialAportes()
     */
    public function clearMaterialAportes()
    {
        $this->collMaterialAportes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collMaterialAportes collection.
     *
     * By default this just sets the collMaterialAportes collection to an empty array (like clearcollMaterialAportes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMaterialAportes($overrideExisting = true)
    {
        if (null !== $this->collMaterialAportes && !$overrideExisting) {
            return;
        }
        $this->collMaterialAportes = new PropelObjectCollection();
        $this->collMaterialAportes->setModel('MaterialAporte');
    }

    /**
     * Gets an array of MaterialAporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Material is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|MaterialAporte[] List of MaterialAporte objects
     * @throws PropelException
     */
    public function getMaterialAportes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collMaterialAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collMaterialAportes) {
                // return empty collection
                $this->initMaterialAportes();
            } else {
                $collMaterialAportes = MaterialAporteQuery::create(null, $criteria)
                    ->filterByMaterial($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collMaterialAportes;
                }
                $this->collMaterialAportes = $collMaterialAportes;
            }
        }

        return $this->collMaterialAportes;
    }

    /**
     * Sets a collection of MaterialAporte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $materialAportes A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setMaterialAportes(PropelCollection $materialAportes, PropelPDO $con = null)
    {
        $this->materialAportesScheduledForDeletion = $this->getMaterialAportes(new Criteria(), $con)->diff($materialAportes);

        foreach ($this->materialAportesScheduledForDeletion as $materialAporteRemoved) {
            $materialAporteRemoved->setMaterial(null);
        }

        $this->collMaterialAportes = null;
        foreach ($materialAportes as $materialAporte) {
            $this->addMaterialAporte($materialAporte);
        }

        $this->collMaterialAportes = $materialAportes;
    }

    /**
     * Returns the number of related MaterialAporte objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related MaterialAporte objects.
     * @throws PropelException
     */
    public function countMaterialAportes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collMaterialAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collMaterialAportes) {
                return 0;
            } else {
                $query = MaterialAporteQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByMaterial($this)
                    ->count($con);
            }
        } else {
            return count($this->collMaterialAportes);
        }
    }

    /**
     * Method called to associate a MaterialAporte object to this object
     * through the MaterialAporte foreign key attribute.
     *
     * @param    MaterialAporte $l MaterialAporte
     * @return   Material The current object (for fluent API support)
     */
    public function addMaterialAporte(MaterialAporte $l)
    {
        if ($this->collMaterialAportes === null) {
            $this->initMaterialAportes();
        }
        if (!$this->collMaterialAportes->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddMaterialAporte($l);
        }

        return $this;
    }

    /**
     * @param	MaterialAporte $materialAporte The materialAporte object to add.
     */
    protected function doAddMaterialAporte($materialAporte)
    {
        $this->collMaterialAportes[]= $materialAporte;
        $materialAporte->setMaterial($this);
    }

    /**
     * @param	MaterialAporte $materialAporte The materialAporte object to remove.
     */
    public function removeMaterialAporte($materialAporte)
    {
        if ($this->getMaterialAportes()->contains($materialAporte)) {
            $this->collMaterialAportes->remove($this->collMaterialAportes->search($materialAporte));
            if (null === $this->materialAportesScheduledForDeletion) {
                $this->materialAportesScheduledForDeletion = clone $this->collMaterialAportes;
                $this->materialAportesScheduledForDeletion->clear();
            }
            $this->materialAportesScheduledForDeletion[]= $materialAporte;
            $materialAporte->setMaterial(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Material is new, it will return
     * an empty collection; or if this Material has previously
     * been saved, it will retrieve related MaterialAportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Material.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|MaterialAporte[] List of MaterialAporte objects
     */
    public function getMaterialAportesJoinAporte($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MaterialAporteQuery::create(null, $criteria);
        $query->joinWith('Aporte', $join_behavior);

        return $this->getMaterialAportes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_material = null;
        $this->archivo = null;
        $this->titulo = null;
        $this->editorial = null;
        $this->autor = null;
        $this->descripcion = null;
        $this->fisico = null;
        $this->tema_id_tema = null;
        $this->biblioteca_id_biblioteca = null;
        $this->carrera_id_carrera = null;
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
            if ($this->collMaterialAportes) {
                foreach ($this->collMaterialAportes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collAccesoMaterials instanceof PropelCollection) {
            $this->collAccesoMaterials->clearIterator();
        }
        $this->collAccesoMaterials = null;
        if ($this->collMaterialAportes instanceof PropelCollection) {
            $this->collMaterialAportes->clearIterator();
        }
        $this->collMaterialAportes = null;
        $this->aTema = null;
        $this->aBiblioteca = null;
        $this->aCarrera = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string The value of the 'titulo' column
     */
    public function __toString()
    {
        return (string) $this->getTitulo();
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseMaterial:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseMaterial
