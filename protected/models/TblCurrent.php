<?php

/**
 * This is the model class for table "tbl_current".
 *
 * The followings are the available columns in table 'tbl_current':
 * @property integer $id
 * @property double $tradeReceive
 * @property double $otherReceive
 * @property double $amountSub
 * @property double $amountAssc
 * @property double $fixedDeposit
 * @property double $cash_bank
 * @property double $total_2
 */
class TblCurrent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblCurrent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_current';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tradeReceive, otherReceive, amountSub, amountAssc, fixedDeposit, cash_bank, total_2', 'required'),
			array('tradeReceive, otherReceive, amountSub, amountAssc, fixedDeposit, cash_bank, total_2', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tradeReceive, otherReceive, amountSub, amountAssc, fixedDeposit, cash_bank, total_2', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tradeReceive' => 'Trade Receive',
			'otherReceive' => 'Other Receive',
			'amountSub' => 'Amount Sub',
			'amountAssc' => 'Amount Assc',
			'fixedDeposit' => 'Fixed Deposit',
			'cash_bank' => 'Cash Bank',
			'total_2' => 'Total 2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tradeReceive',$this->tradeReceive);
		$criteria->compare('otherReceive',$this->otherReceive);
		$criteria->compare('amountSub',$this->amountSub);
		$criteria->compare('amountAssc',$this->amountAssc);
		$criteria->compare('fixedDeposit',$this->fixedDeposit);
		$criteria->compare('cash_bank',$this->cash_bank);
		$criteria->compare('total_2',$this->total_2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}