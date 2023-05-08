CREATE TABLE gym_posts (
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    post_text TEXT NOT NULL,
    post_date DATETIME NOT NULL,
    likes INT NOT NULL DEFAULT 0,
    dislikes INT NOT NULL DEFAULT 0
);

INSERT INTO
    gym_posts (username, post_text, post_date, likes, dislikes)
VALUES
    (
        'fit_guru',
        'Just finished a killer leg day at the gym!',
        '2022-04-01 15:30:00',
        20,
        2
    ),
    (
        'gym_rat',
        'Trying to hit a new PR on bench press today. Wish me luck!',
        '2022-04-02 12:45:00',
        15,
        3
    ),
    (
        'iron_junkie',
        'Squats and deadlifts are the only two exercises that matter. Change my mind.',
        '2022-04-03 10:15:00',
        8,
        10
    ),
    (
        'fitness_fanatic',
        'Cardio is my jam! Just knocked out a 5k in under 30 minutes.',
        '2022-04-04 08:00:00',
        30,
        5
    ),
    (
        'gym_lover_69',
        'Rest days are just as important as workout days. Remember to give your body time to recover!',
        '2022-04-05 17:00:00',
        12,
        1
    ),
    (
        'muscle_maniac',
        "Gains don't come from comfort zones. Push yourself to be better every day!",
        '2022-04-06 11:30:00',
        25,
        4
    ),
    (
        'fitness_enthusiast',
        'Tried a new yoga class today and loved it! Who knew fitness could be so relaxing?',
        '2022-04-07 14:00:00',
        18,
        2
    );

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    join_date DATETIME NOT NULL
);

INSERT INTO users (username, password, email, first_name, last_name, join_date)
VALUES 
    ('fit_guru', 'strongpass', 'fitguru@gmail.com', 'Maria', 'Garcia', '2022-03-30 10:00:00'),
    ('gym_rat', 'gymtime12', 'gymrat@hotmail.com', 'Michael', 'Lee', '2022-03-31 11:00:00'),
    ('iron_junkie', 'liftmore99', 'ironjunkie@gmail.com', 'Adam', 'Smith', '2022-04-01 12:00:00'),
    ('fitness_fanatic', 'cardioking', 'fitnessfanatic@hotmail.com', 'Lisa', 'Kim', '2022-04-02 13:00:00'),
    ('gym_lover', 'restdayz', 'gymlover@gmail.com', 'David', 'Nguyen', '2022-04-03 14:00:00'),
    ('muscle_maniac', 'gainz4life', 'musclemaniac@hotmail.com', 'Daniel', 'Chang', '2022-04-04 15:00:00'),
    ('fitness_enthusiast', 'yogalife', 'fitnesenthusiast@gmail.com', 'Emily', 'Wilson', '2022-04-05 16:00:00');