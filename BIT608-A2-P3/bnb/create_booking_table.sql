CREATE DATABASE IF NOT EXISTS bnb; USE
    bnb;
    -- New Booking Table
DROP TABLE IF EXISTS
    booking;
CREATE TABLE IF NOT EXISTS booking(
    bookingID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    roomID INT UNSIGNED NOT NULL,
    customerID INT UNSIGNED NOT NULL,
    contact_number VARCHAR(17) NOT NULL,
    checkin_date DATE NOT NULL,
    checkout_date DATE NOT NULL,
    breakfast_option VARCHAR(20) NOT NULL,
    booking_extras VARCHAR(510),
    room_review VARCHAR(510),
    PRIMARY KEY(bookingID),
    FOREIGN KEY(roomID) REFERENCES room(roomID),
    FOREIGN KEY(customerID) REFERENCES customer(customerID)
) AUTO_INCREMENT = 1;