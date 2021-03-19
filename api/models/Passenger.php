<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "passenger".
 *
 * @property int $passengerId
 * @property int $profileId
 * @property int $bookingId
 * @property string $date
 * @property string $destination
 * @property string $pickup
 * @property int $userId
 */
class Passenger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'passenger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profileId', 'bookingId', 'date', 'destination', 'pickup', 'userId'], 'required'],
            [['profileId', 'bookingId', 'userId'], 'integer'],
            [['date'], 'safe'],
            [['destination'], 'string', 'max' => 255],
            [['pickup'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'passengerId' => 'Passenger ID',
            'profileId' => 'Profile ID',
            'bookingId' => 'Booking ID',
            'date' => 'Date',
            'destination' => 'Destination',
            'pickup' => 'Pickup',
            'userId' => 'User ID',
        ];
    }
}
