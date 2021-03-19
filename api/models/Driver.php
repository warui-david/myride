<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $driverId
 * @property int $carId
 * @property int $userId
 * @property int $profileId
 * @property string $destination
 * @property string $route
 * @property string $pickup
 * @property int $bookingId
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['driverId', 'carId', 'userId', 'profileId', 'destination', 'route', 'pickup', 'bookingId'], 'required'],
            [['driverId', 'carId', 'userId', 'profileId', 'bookingId'], 'integer'],
            [['destination', 'route', 'pickup'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'driverId' => 'Driver ID',
            'carId' => 'Car ID',
            'userId' => 'User ID',
            'profileId' => 'Profile ID',
            'destination' => 'Destination',
            'route' => 'Route',
            'pickup' => 'Pickup',
            'bookingId' => 'Booking ID',
        ];
    }
}
