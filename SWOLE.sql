-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_22_174718_posts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `image_path` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `description`, `image_path`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'test', 'test', 'test', '64590b4a15396-test.png', '2023-05-08 13:46:34', '2023-05-08 13:46:34', 1),
(2, '10-tips-for-building-muscle-mass-and-strength', '10 Tips for Building Muscle Mass and Strength', 'Hey everyone, it\'s fit_guru here! If you\'re looking to build muscle mass and strength, you\'ve come to the right place. As a fitness enthusiast and personal trainer, I\'ve worked with countless clients who have wanted to achieve these goals, and I\'m here to share some of my top tips with you.\r\n\r\n1. Lift heavy weights: To build muscle mass and strength, you need to challenge your muscles by lifting heavy weights. Aim for 3-5 sets of 6-10 reps of each exercise.\r\n\r\n2. Compound exercises: Compound exercises like squats, deadlifts, bench press, and pull-ups work multiple muscle groups at once and are great for building strength and mass.\r\n\r\n3. Progressive overload: To keep making progress, you need to continuously challenge your muscles by gradually increasing the weight you\'re lifting over time.\r\n\r\n4. Proper form: Always use proper form when lifting weights to avoid injury and ensure that you\'re targeting the right muscles.\r\n\r\n5. Eat a protein-rich diet: Protein is essential for building muscle mass, so make sure you\'re getting enough of it in your diet. Aim for 1-1.5 grams of protein per pound of bodyweight per day.\r\n\r\n6. Get enough rest: Your muscles need time to recover and grow, so make sure you\'re getting enough rest and sleep.\r\n\r\n7. Track your progress: Keep track of your lifts and progress over time to ensure that you\'re making progress towards your goals.\r\n\r\n8. Be consistent: Building muscle mass and strength takes time and consistency. Make sure you\'re sticking to your workout plan and diet to see results.\r\n\r\n9. Mix up your routine: To keep your muscles guessing and avoid plateaus, mix up your routine by changing up your exercises, reps, and sets.\r\n\r\n10. Stay motivated: Building muscle mass and strength can be challenging, but remember why you started and stay motivated. With hard work and consistency, you can achieve your goals!\r\n\r\nThat\'s it for my top tips for building muscle mass and strength. Remember, building a strong and healthy body takes time and effort, but it\'s worth it in the end. Good luck, and happy lifting!', '64590d5ab0404-10 Tips for Building Muscle Mass and Strength.png', '2023-05-08 13:55:22', '2023-05-08 13:56:01', 2),
(4, 'the-importance-of-rest-days-for-muscle-growth', 'The Importance of Rest Days for Muscle Growth', 'Hey there fellow gym-goers, Iron Junkie here! Today, I want to talk about the importance of rest days for muscle growth. As someone who\'s been hitting the gym for years, I\'ve learned the hard way that overtraining can actually do more harm than good.\r\n\r\nYou see, when you lift weights, you\'re actually causing tiny tears in your muscles. It\'s during the rest and recovery period that your body repairs these tears and builds new muscle tissue. So, if you\'re not giving your body enough time to rest and recover, you\'re hindering your progress in the gym.\r\n\r\nI used to think that more was better and would hit the gym every day, but I quickly realized that I was burning out and not seeing the gains I wanted. Now, I make sure to take at least one rest day per week and focus on proper nutrition and recovery methods like foam rolling and stretching.\r\n\r\nRemember, the goal of going to the gym is to build a strong and healthy body, not to constantly push yourself to the brink of exhaustion. So, don\'t be afraid to take a day off and let your muscles recover. Your body will thank you for it and you\'ll see better results in the long run.\r\n\r\nUntil next time, keep lifting and stay strong!', '645921c357509-The Importance of Rest Days for Muscle Growth.jpg', '2023-05-08 15:22:27', '2023-05-08 15:22:27', 4),
(5, 'why-cardio-is-just-as-important-as-strength-training', 'Why Cardio is Just as Important as Strength Training', 'Hey everyone, it\'s Fitness_Fanatic here, and today I want to talk about the importance of cardio in your workout routine.\r\n\r\nI know many of us love hitting the weights and getting stronger, but it\'s important to remember that cardiovascular exercise is just as crucial for our health and fitness goals.\r\n\r\nCardio can help improve your heart health, increase endurance, and even aid in weight loss. By incorporating activities such as running, cycling, or swimming into your routine, you can improve your overall fitness level and reap the benefits that come with it.\r\n\r\nAdditionally, adding cardio to your routine can help prevent injury by improving your flexibility and balance. It can also boost your mood and reduce stress, leaving you feeling refreshed and energized.\r\n\r\nSo, if you\'re someone who tends to skip out on cardio or neglects it altogether, I encourage you to give it a try. Start small by adding a 10-minute jog to the end of your weightlifting session and work your way up from there.\r\n\r\nRemember, fitness is all about balance and incorporating a variety of exercises into your routine. So, let\'s get moving and make cardio a priority in our fitness journeys!', '645923bd0cfc9-Why Cardio is Just as Important as Strength Training.jpg', '2023-05-08 15:30:53', '2023-05-08 15:30:53', 5),
(6, 'how-to-stay-motivated-in-your-gym-routine', 'How to Stay Motivated in Your Gym Routine', 'Hey everyone, Gym Lover here. I know how hard it can be to stay motivated when it comes to your gym routine. It\'s easy to get bored with the same exercises, or to feel like you\'re not seeing any progress. But don\'t worry, I\'ve been there before, and I\'ve got some tips to help you stay on track.\r\n\r\nFirst of all, it\'s important to set realistic goals. Don\'t expect to see huge changes in your body overnight. Take things one step at a time, and focus on making progress each week. Celebrate your achievements, no matter how small they may seem.\r\n\r\nSecondly, mix things up! Don\'t stick to the same old routine every time you hit the gym. Try new exercises or classes, or switch up the order of your exercises. Not only will this keep things interesting, but it will also challenge your body in new ways.\r\n\r\nThirdly, find a gym buddy. Having someone to work out with can be a huge motivator. You can keep each other accountable, push each other to work harder, and even make your gym sessions more fun!\r\n\r\nLastly, don\'t forget to enjoy yourself. Working out should be something that you enjoy, not a chore. Play your favorite music, wear your favorite gym clothes, and have fun!\r\n\r\nRemember, staying motivated takes effort, but it\'s worth it. Keep pushing yourself, and you\'ll be amazed at what you can achieve. Happy lifting!', '645924d627101-How to Stay Motivated in Your Gym Routine.jpg', '2023-05-08 15:35:34', '2023-05-08 15:35:34', 6),
(7, '5-essential-supplements-for-muscle-building', '5 Essential Supplements for Muscle Building', 'Hey everyone, it\'s Muscle Maniac here, and I\'m here to share with you my top 5 essential supplements for building muscle. If you\'re serious about packing on muscle mass and making gains, then these supplements are a must-have in your arsenal.\r\n\r\n1. Whey Protein: This is a no-brainer. Whey protein is the king of all supplements when it comes to building muscle. It\'s a fast-digesting protein that\'s perfect for post-workout recovery and building lean muscle.\r\n\r\n2. Creatine: Creatine is one of the most researched supplements in the fitness industry, and for good reason. It\'s been shown to increase strength, power, and muscle size. If you\'re serious about building muscle, then you need to be taking creatine.\r\n\r\n3. BCAAs: Branched-chain amino acids (BCAAs) are the building blocks of muscle tissue. They help to prevent muscle breakdown and stimulate muscle protein synthesis. Taking BCAAs during your workout can help to fuel your muscles and prevent fatigue.\r\n\r\n4. Beta-Alanine: Beta-alanine is an amino acid that\'s been shown to increase muscular endurance and delay fatigue. It\'s a great supplement to take if you\'re looking to push yourself harder in the gym and get more out of your workouts.\r\n\r\n5. Fish Oil: Fish oil is a great supplement for overall health, but it\'s also been shown to help with muscle building. It\'s a rich source of omega-3 fatty acids, which can help to reduce inflammation, improve joint health, and increase muscle protein synthesis.\r\n\r\nSo there you have it, my top 5 essential supplements for building muscle. If you\'re serious about making gains, then you need to be taking these supplements. Combine them with a solid workout program and a healthy diet, and you\'ll be on your way to building the physique you\'ve always wanted. Keep pushing yourself and never give up on your fitness goals.', '64592571b5d56-5 Essential Supplements for Muscle Building.jpg', '2023-05-08 15:38:09', '2023-05-08 15:38:09', 7),
(8, '5-yoga-poses-to-relieve-stress-and-anxiety', '5 Yoga Poses to Relieve Stress and Anxiety', 'As a yoga teacher, I often get asked about poses that can help relieve stress and anxiety. While there are many effective poses, here are five of my favorites:\r\n\r\n1. Child\'s Pose (Balasana) - This pose gently stretches the hips, thighs, and ankles while promoting relaxation and calmness.\r\n\r\n2. Downward-Facing Dog (Adho Mukha Svanasana) - This pose helps to release tension in the shoulders, hamstrings, and calves, while also promoting blood circulation to the brain, which can help reduce anxiety.\r\n\r\n3. Tree Pose (Vrikshasana) - This balancing pose helps to improve focus and concentration while also building strength in the legs and core.\r\n\r\n4. Seated Forward Bend (Paschimottanasana) - This pose helps to calm the mind, relieve stress, and gently stretch the back and hamstrings.\r\n\r\n5. Corpse Pose (Savasana) - This final relaxation pose is a great way to end any yoga practice, as it helps to calm the nervous system and promote deep relaxation.\r\n\r\nIncorporating these poses into your daily routine can help you manage stress and anxiety, and promote overall health and well-being. Remember to take deep, mindful breaths as you move through each pose, and always listen to your body. Namaste.', '645926196b336-5 Yoga Poses to Relieve Stress and Anxiety.jpg', '2023-05-08 15:40:57', '2023-05-08 15:40:57', 8),
(9, 'my-journey-as-a-beginner-gym-rat', 'My Journey as a Beginner Gym Rat', 'Hey there, fellow fitness enthusiasts! My name is gym_rat and I\'m excited to share with you my journey as a beginner in the world of fitness.\r\n\r\nBefore I started going to the gym, I was always intimidated by the gym equipment and the fit people around me. I didn\'t know where to start, what exercises to do or how to use the machines.\r\n\r\nHowever, I was determined to make a change and improve my health, so I took the first step and signed up for a gym membership. I started off slow, with simple exercises like walking on the treadmill and doing basic stretches.\r\n\r\nAs I became more comfortable in the gym, I began to explore different exercises and workout routines. I also started to educate myself on the benefits of weight training and how it could help me reach my fitness goals.\r\n\r\nNow, a few months into my journey, I can proudly say that I\'ve made significant progress. I\'m able to lift heavier weights, run faster, and do more advanced exercises. More importantly, I feel healthier and more confident in my body.\r\n\r\nIf you\'re a beginner like me, my advice to you is to not be afraid to start small and take it one step at a time. Don\'t compare yourself to others in the gym and focus on your own progress. Remember, everyone starts somewhere, and with consistency and dedication, you can achieve your fitness goals too!\r\n\r\nThat\'s it for now, gym rats. Keep pushing yourself and never give up on your fitness journey. See you at the gym!', '6459269d232f0-My Journey as a Beginner Gym Rat.jpg', '2023-05-08 15:43:09', '2023-05-08 15:43:09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'syro13', 'lowisjakub@gmail.com', NULL, '$2y$10$RLJJoF3uvZx6rQlhB4KVq.YY/T20X/.uu5cMmxcvGoPCcFLWndVua', NULL, '2023-05-08 13:41:31', '2023-05-08 13:41:31'),
(2, 'fit_guru', 'fitguru@gmail.com', NULL, '$2y$10$jOfUoWSy0k8JHyyY7rc4lOg5qZKk50m92NTaNrb7L/gUtEOzclU9m', NULL, '2023-05-08 13:49:15', '2023-05-08 13:49:15'),
(3, 'gym_rat', 'gymrat@hotmail.com', NULL, '$2y$10$rF.eOOTnZREIjVBBhujMGuVUzBIRQPNu5PxsIBcxCq9vkUcNFpAXq', NULL, '2023-05-08 15:08:47', '2023-05-08 15:08:47'),
(4, 'iron_junkie', 'ironjunkie@gmail.com', NULL, '$2y$10$y42rMMhBwbGPQ8O/APXVze5yRbM6/QKWOk5Vvp.xbVC7.M0TdPL4i', NULL, '2023-05-08 15:20:18', '2023-05-08 15:20:18'),
(5, 'fitness_fanatic', 'fitnessfanatic@hotmail.com', NULL, '$2y$10$YI8cL3Hli/luR81BY34d5u8RS5C36qkS1SRLtlLh4mTPa.pgA6/Zy', NULL, '2023-05-08 15:25:43', '2023-05-08 15:25:43'),
(6, 'gym_lover', 'gymlover@gmail.com', NULL, '$2y$10$lQCcqpGDmgJgNkMV4fW15uzB7//UOVDMLGei366z.rG5ne4/SDmtq', NULL, '2023-05-08 15:31:33', '2023-05-08 15:31:33'),
(7, 'muscle_maniac', 'musclemaniac@hotmail.com', NULL, '$2y$10$ZKefrZfKp3qNXLFCmIEvyemhFecQoSBvggYvRKFlcds1gi12bDsI.', NULL, '2023-05-08 15:36:07', '2023-05-08 15:36:07'),
(8, 'fitness_enthusiast', 'fitnesenthusiast@gmail.com', NULL, '$2y$10$Fed3DGMPYxZNC88tzNDeK.hpoCUg5k8kGhz0DRJgVui2QzsaFy15y', NULL, '2023-05-08 15:38:53', '2023-05-08 15:38:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
