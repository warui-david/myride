<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $bookingId
 * @property int $userId
 * @property int $amount
 * @property string $pickupLocation
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'amount', 'pickupLocation'], 'required'],
            [['userId', 'amount'], 'integer'],
            [['pickupLocation'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingId' => 'Booking ID',
            'userId' => 'User ID',
            'amount' => 'Amount',
            'pickupLocation' => 'Pickup Location',
        ];
    }
}
