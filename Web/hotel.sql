CREATE TABLE hotel (
    Room_id CHAR(3),
    Floors VARCHAR(50),
    Price INT,
    SD VARCHAR(100),
    Room_Type VARCHAR(255)
);

INSERT INTO hotel (Room_id, Floors, Price, SD, Room_Type)
VALUES 
    ('101', 'B3', 4000, 'Single', 'Junior Suite'),
    ('102', 'B14', 4500, 'Double', 'Superior'),
    ('103', 'B9', 5000, 'Single', 'Royal Suite'),
	('104', 'B7', 10000, 'Double', 'Deluxe');
