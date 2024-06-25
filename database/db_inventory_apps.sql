-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 11:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `db_inventory_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
    `CustomerID` bigint(20) UNSIGNED NOT NULL,
    `Nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `NomorTelepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO
    `customers` (
        `CustomerID`,
        `Nama`,
        `Alamat`,
        `NomorTelepon`,
        `Email`
    )
VALUES (
        1,
        'John Doe',
        '123 Main St',
        '123-456-7890',
        'john.doe@example.com'
    ),
    (
        2,
        'Jane Smith',
        '456 Elm St',
        '987-654-3210',
        'jane.smith@example.com'
    ),
    (
        3,
        'Michael Johnson',
        '789 Oak St',
        '555-555-5555',
        'michael.johnson@example.com'
    ),
    (
        4,
        'Emily Davis',
        '321 Pine St',
        '111-222-3333',
        'emily.davis@example.com'
    ),
    (
        5,
        'David Wilson',
        '654 Cedar St',
        '444-444-4444',
        'david.wilson@example.com'
    ),
    (
        6,
        'Sarah Lee',
        '987 Birch St',
        '777-888-9999',
        'sarah.lee@example.com'
    ),
    (
        7,
        'Robert Brown',
        '852 Walnut St',
        '666-666-6666',
        'robert.brown@example.com'
    ),
    (
        8,
        'Linda Martinez',
        '741 Elmwood St',
        '999-999-9999',
        'linda.martinez@example.com'
    ),
    (
        9,
        'William Taylor',
        '159 Cherry St',
        '222-333-4444',
        'william.taylor@example.com'
    ),
    (
        10,
        'Karen Rodriguez',
        '753 Maple St',
        '888-777-6666',
        'karen.rodriguez@example.com'
    ),
    (
        12,
        'sadasdasdsd',
        'sadasdsda',
        '898978912312312',
        'ads@gmail.com'
    ),
    (
        13,
        'dsdsfdfsdsfdsf',
        'dfsdsfdsfdfsdsf',
        '08951402432121',
        'adasdsadsadsds@gmail.com'
    ),
    (
        14,
        'sadsdaasd',
        'sadasdasd',
        '2121131232312',
        'ads21321@gmail.com'
    ),
    (
        15,
        'dsfdsfdfs',
        'fsdsdfsdf',
        '342324343242',
        'adssfdsdfsdf@gmail.com'
    );

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomingitems`
--

CREATE TABLE `incomingitems` (
    `IncomingID` bigint(20) UNSIGNED NOT NULL,
    `TransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `SalesTransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `Tanggal` date DEFAULT NULL,
    `ItemID` bigint(20) UNSIGNED DEFAULT NULL,
    `Jumlah` int(11) DEFAULT NULL,
    `HargaPerItem` decimal(10, 2) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `incomingitems`
--

INSERT INTO
    `incomingitems` (
        `IncomingID`,
        `TransaksiID`,
        `SalesTransaksiID`,
        `Tanggal`,
        `ItemID`,
        `Jumlah`,
        `HargaPerItem`
    )
VALUES (
        1,
        1,
        1,
        '2024-06-22',
        1,
        10,
        '50.00'
    ),
    (
        3,
        3,
        3,
        '2024-06-22',
        3,
        8,
        '25.00'
    ),
    (
        5,
        5,
        5,
        '2024-05-21',
        10,
        20,
        '35000.00'
    ),
    (
        6,
        6,
        6,
        '2024-06-22',
        6,
        18,
        '30.00'
    ),
    (
        7,
        7,
        7,
        '2024-06-22',
        7,
        5,
        '45.00'
    ),
    (
        8,
        8,
        8,
        '2024-06-22',
        8,
        14,
        '20.00'
    ),
    (
        9,
        9,
        9,
        '2024-06-22',
        9,
        7,
        '15.00'
    ),
    (
        10,
        10,
        10,
        '2024-06-22',
        10,
        10,
        '18.00'
    ),
    (
        13,
        9,
        8,
        '2024-06-20',
        14,
        22,
        '12121.00'
    ),
    (
        14,
        5,
        7,
        '2024-05-26',
        10,
        55,
        '32232332.00'
    );

-- --------------------------------------------------------

--
-- Table structure for table `itemcategories`
--

CREATE TABLE `itemcategories` (
    `KategoriID` bigint(20) UNSIGNED NOT NULL,
    `NamaKategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `itemcategories`
--

INSERT INTO
    `itemcategories` (`KategoriID`, `NamaKategori`)
VALUES (1, 'Elektronik'),
    (2, 'Pakaian'),
    (3, 'Alat Tulis'),
    (4, 'Makanan'),
    (5, 'Minuman'),
    (6, 'Perabotan'),
    (7, 'Mainan'),
    (8, 'Kesehatan'),
    (9, 'Olahraga'),
    (10, 'Hewan Peliharaan');

-- --------------------------------------------------------

--
-- Table structure for table `itemrequests`
--

CREATE TABLE `itemrequests` (
    `RequestID` bigint(20) UNSIGNED NOT NULL,
    `Tanggal` date DEFAULT NULL,
    `CustomerID` bigint(20) UNSIGNED DEFAULT NULL,
    `ItemID` bigint(20) UNSIGNED DEFAULT NULL,
    `Jumlah` int(11) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `itemrequests`
--

INSERT INTO
    `itemrequests` (
        `RequestID`,
        `Tanggal`,
        `CustomerID`,
        `ItemID`,
        `Jumlah`
    )
VALUES (2, '2024-05-27', 9, 11, 33),
    (3, '2024-06-22', 3, 3, 7),
    (4, '2024-06-22', 4, 4, 4),
    (5, '2024-06-22', 5, 5, 6),
    (6, '2024-06-22', 6, 6, 8),
    (7, '2024-06-22', 7, 7, 3),
    (8, '2024-06-22', 8, 8, 10),
    (10, '2024-06-22', 10, 10, 5),
    (12, '2024-06-24', 14, 11, 55),
    (13, '2024-06-25', 12, 9, 55);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
    `ItemID` bigint(20) UNSIGNED NOT NULL,
    `Nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Harga` decimal(10, 2) DEFAULT NULL,
    `JumlahStok` int(11) DEFAULT NULL,
    `SupplierID` bigint(20) UNSIGNED DEFAULT NULL,
    `KategoriID` bigint(20) UNSIGNED DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO
    `items` (
        `ItemID`,
        `Nama`,
        `Deskripsi`,
        `Harga`,
        `JumlahStok`,
        `SupplierID`,
        `KategoriID`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Laptop Acer',
        'Laptop Acer dengan prosesor Intel Core i5 dan RAM 8GB.',
        '450.00',
        20,
        1,
        1,
        NULL,
        '2024-06-24 04:58:38'
    ),
    (
        2,
        'T-shirt Nike',
        'Baju T-shirt Nike warna hitam dengan logo Nike di bagian depan.',
        '250.00',
        50,
        2,
        2,
        NULL,
        '2024-06-24 07:01:33'
    ),
    (
        3,
        'Pensil 2B',
        'Pensil 2B dengan kualitas tinggi untuk menulis dan menggambar.',
        '5000.00',
        100,
        3,
        3,
        NULL,
        NULL
    ),
    (
        4,
        'Roti Tawar',
        'Roti tawar ukuran besar, cocok untuk sarapan pagi.',
        '10000.00',
        200,
        4,
        4,
        NULL,
        NULL
    ),
    (
        5,
        'Air Mineral',
        'Botol air mineral ukuran 500ml.',
        '2000.00',
        300,
        5,
        5,
        NULL,
        NULL
    ),
    (
        6,
        'Meja Lipat',
        'Meja lipat portabel dengan bahan berkualitas.',
        '150000.00',
        30,
        6,
        6,
        NULL,
        NULL
    ),
    (
        7,
        'Boneka Teddy Bear',
        'Boneka teddy bear berwarna coklat dengan bahan yang lembut.',
        '80000.00',
        40,
        7,
        7,
        NULL,
        NULL
    ),
    (
        8,
        'Vitamin C',
        'Suplemen vitamin C untuk menjaga daya tahan tubuh.',
        '25000.00',
        50,
        8,
        8,
        NULL,
        NULL
    ),
    (
        9,
        'Bola Sepak',
        'Bola sepak berukuran standar.',
        '30000.00',
        25,
        9,
        9,
        NULL,
        NULL
    ),
    (
        10,
        'Makanan Anjing',
        'Makanan anjing dengan rasa daging.',
        '15000.00',
        60,
        10,
        10,
        NULL,
        NULL
    ),
    (
        11,
        'sadsda coba update\\ lagi',
        'sdaasddfsf sdf ds',
        '213123.00',
        2,
        19,
        10,
        '2024-06-23 07:24:07',
        '2024-06-23 08:21:16'
    ),
    (
        13,
        'sasadsa',
        'zaxdasd update coba',
        '23123123.00',
        22,
        3,
        2,
        '2024-06-23 23:32:21',
        '2024-06-24 00:20:25'
    ),
    (
        14,
        'dsadsa',
        'dassda',
        '342324.00',
        23,
        2,
        7,
        '2024-06-23 23:33:21',
        '2024-06-23 23:33:21'
    ),
    (
        16,
        'sasdsadsad',
        'sadasdasdsad',
        '22112.00',
        11,
        16,
        4,
        '2024-06-24 02:02:57',
        '2024-06-24 02:02:57'
    );

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1,
        '2014_10_12_000000_create_users_table',
        1
    ),
    (
        2,
        '2014_10_12_100000_create_password_reset_tokens_table',
        1
    ),
    (
        3,
        '2019_08_19_000000_create_failed_jobs_table',
        1
    ),
    (
        4,
        '2019_12_14_000001_create_personal_access_tokens_table',
        1
    ),
    (
        5,
        '2024_06_22_00000_create_customers_table',
        1
    ),
    (
        6,
        '2024_06_22_11111_create_suppliers_table',
        1
    ),
    (
        7,
        '2024_06_22_12222_create_purchasetransactions_table',
        1
    ),
    (
        8,
        '2024_06_22_12333_create_salestransactions_table',
        1
    ),
    (
        9,
        '2024_06_22_12344_create_itemcategories_table',
        1
    ),
    (
        10,
        '2024_06_22_12345_create_items_table',
        1
    ),
    (
        11,
        '2024_06_22_131736_create_incomingitems_table',
        1
    ),
    (
        12,
        '2024_06_22_131838_create_itemrequests_table',
        1
    ),
    (
        13,
        '2024_06_22_131933_create_outgoingitems_table',
        1
    ),
    (
        14,
        '2024_06_22_131947_create_purchasetransactiondetails_table',
        1
    ),
    (
        15,
        '2024_06_22_132016_create_salestransactiondetails_table',
        1
    );

-- --------------------------------------------------------

--
-- Table structure for table `outgoingitems`
--

CREATE TABLE `outgoingitems` (
    `OutgoingID` bigint(20) UNSIGNED NOT NULL,
    `TransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `SalesTransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `Tanggal` date DEFAULT NULL,
    `ItemID` bigint(20) UNSIGNED DEFAULT NULL,
    `Jumlah` int(11) DEFAULT NULL,
    `HargaPerItem` decimal(10, 2) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `outgoingitems`
--

INSERT INTO
    `outgoingitems` (
        `OutgoingID`,
        `TransaksiID`,
        `SalesTransaksiID`,
        `Tanggal`,
        `ItemID`,
        `Jumlah`,
        `HargaPerItem`
    )
VALUES (
        1,
        1,
        1,
        '2024-06-22',
        1,
        7,
        '50.00'
    ),
    (
        2,
        2,
        2,
        '2024-06-22',
        2,
        5,
        '30.00'
    ),
    (
        3,
        3,
        3,
        '2024-06-22',
        3,
        10,
        '25.00'
    ),
    (
        4,
        4,
        4,
        '2024-06-22',
        4,
        8,
        '40.00'
    ),
    (
        5,
        5,
        5,
        '2024-06-22',
        5,
        12,
        '35.00'
    ),
    (
        6,
        6,
        6,
        '2024-06-22',
        6,
        6,
        '30.00'
    ),
    (
        7,
        7,
        7,
        '2024-06-22',
        7,
        3,
        '45.00'
    ),
    (
        8,
        8,
        8,
        '2024-06-22',
        8,
        4,
        '20.00'
    ),
    (
        9,
        9,
        9,
        '2024-06-22',
        9,
        15,
        '15.00'
    ),
    (
        10,
        10,
        10,
        '2024-06-22',
        10,
        9,
        '18.00'
    ),
    (
        11,
        4,
        5,
        '2024-05-27',
        14,
        33,
        '333333.00'
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
    `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `last_used_at` timestamp NULL DEFAULT NULL,
    `expires_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchasetransactiondetails`
--

CREATE TABLE `purchasetransactiondetails` (
    `DetailID` bigint(20) UNSIGNED NOT NULL,
    `TransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `ItemID` bigint(20) UNSIGNED DEFAULT NULL,
    `Jumlah` int(11) DEFAULT NULL,
    `HargaPerItem` decimal(10, 2) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `purchasetransactiondetails`
--

INSERT INTO
    `purchasetransactiondetails` (
        `DetailID`,
        `TransaksiID`,
        `ItemID`,
        `Jumlah`,
        `HargaPerItem`
    )
VALUES (1, 9, 9, 15, '15.00'),
    (2, 10, 10, 9, '18.00'),
    (3, 1, 1, 5, '50.00'),
    (4, 2, 2, 8, '30.00'),
    (5, 3, 3, 3, '25.00'),
    (6, 4, 4, 6, '40.00'),
    (7, 5, 5, 10, '35.00'),
    (8, 6, 6, 4, '30.00'),
    (9, 7, 7, 7, '45.00'),
    (10, 8, 8, 9, '20.00'),
    (11, 9, 9, 12, '15.00'),
    (12, 4, 10, 3, '18.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchasetransactions`
--

CREATE TABLE `purchasetransactions` (
    `TransaksiID` bigint(20) UNSIGNED NOT NULL,
    `Tanggal` date DEFAULT NULL,
    `TotalHarga` decimal(10, 2) DEFAULT NULL,
    `SupplierID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `purchasetransactions`
--

INSERT INTO
    `purchasetransactions` (
        `TransaksiID`,
        `Tanggal`,
        `TotalHarga`,
        `SupplierID`
    )
VALUES (
        1,
        '2024-06-22',
        '300000.00',
        1
    ),
    (
        2,
        '2024-06-05',
        '2500000.00',
        2
    ),
    (
        3,
        '2024-06-10',
        '1800000.00',
        3
    ),
    (
        4,
        '2024-06-15',
        '1200000.00',
        4
    ),
    (
        5,
        '2024-06-20',
        '3000000.00',
        5
    ),
    (
        6,
        '2024-06-25',
        '2000000.00',
        6
    ),
    (
        7,
        '2024-06-28',
        '2200000.00',
        7
    ),
    (
        8,
        '2024-06-30',
        '2800000.00',
        8
    ),
    (
        9,
        '2024-07-02',
        '1900000.00',
        9
    ),
    (
        10,
        '2024-07-05',
        '26000.00',
        10
    ),
    (
        12,
        '2024-06-30',
        '21213.00',
        6
    ),
    (
        13,
        '2024-06-04',
        '22200000.00',
        8
    );

-- --------------------------------------------------------

--
-- Table structure for table `salestransactiondetails`
--

CREATE TABLE `salestransactiondetails` (
    `DetailID` bigint(20) UNSIGNED NOT NULL,
    `TransaksiID` bigint(20) UNSIGNED DEFAULT NULL,
    `ItemID` bigint(20) UNSIGNED DEFAULT NULL,
    `Jumlah` int(11) DEFAULT NULL,
    `HargaPerItem` decimal(10, 2) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `salestransactiondetails`
--

INSERT INTO
    `salestransactiondetails` (
        `DetailID`,
        `TransaksiID`,
        `ItemID`,
        `Jumlah`,
        `HargaPerItem`
    )
VALUES (1, 1, 1, 5, '60.00'),
    (2, 2, 2, 3, '40.00'),
    (3, 3, 3, 7, '30.00'),
    (4, 4, 4, 4, '25.00'),
    (5, 5, 5, 6, '35.00'),
    (6, 6, 6, 8, '28.00'),
    (7, 7, 7, 2, '50.00'),
    (8, 8, 8, 5, '20.00'),
    (9, 9, 9, 10, '15.00'),
    (10, 10, 10, 3, '18.00');

-- --------------------------------------------------------

--
-- Table structure for table `salestransactions`
--

CREATE TABLE `salestransactions` (
    `TransaksiID` bigint(20) UNSIGNED NOT NULL,
    `Tanggal` date DEFAULT NULL,
    `TotalHarga` decimal(10, 2) DEFAULT NULL,
    `CustomerID` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `salestransactions`
--

INSERT INTO
    `salestransactions` (
        `TransaksiID`,
        `Tanggal`,
        `TotalHarga`,
        `CustomerID`
    )
VALUES (1, '2024-06-22', '300.00', 1),
    (
        2,
        '2024-06-22',
        '120000.00',
        2
    ),
    (3, '2024-06-22', '210.00', 3),
    (4, '2024-06-22', '100.00', 4),
    (5, '2024-06-22', '210.00', 5),
    (6, '2024-06-22', '224.00', 6),
    (7, '2024-06-22', '100.00', 7),
    (8, '2024-06-22', '100.00', 8),
    (9, '2024-06-22', '150.00', 9),
    (10, '2024-06-22', '54.00', 10),
    (
        12,
        '2024-06-24',
        '60000.00',
        9
    ),
    (
        13,
        '2024-06-24',
        '825000.00',
        14
    ),
    (
        14,
        '2024-02-24',
        '23223323.00',
        14
    );

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
    `SupplierID` bigint(20) UNSIGNED NOT NULL,
    `Nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `NomorTelepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO
    `suppliers` (
        `SupplierID`,
        `Nama`,
        `Alamat`,
        `NomorTelepon`,
        `Email`
    )
VALUES (
        1,
        'Supplier A',
        'Jl. Supplier A No. 123',
        '08123456789',
        'suppliera@example.com'
    ),
    (
        2,
        'Supplier B',
        'Jl. Supplier B No. 456',
        '087654321',
        'supplierb@example.com'
    ),
    (
        3,
        'Supplier C',
        'Jl. Supplier C No. 789',
        '08567895432',
        'supplierc@example.com'
    ),
    (
        4,
        'Supplier D',
        'Jl. Supplier D No. 987',
        '0897654321',
        'supplierd@example.com'
    ),
    (
        5,
        'Supplier E',
        'Jl. Supplier E No. 654',
        '0812345678',
        'suppliere@example.com'
    ),
    (
        6,
        'Supplier F',
        'Jl. Supplier F No. 321',
        '0876543210',
        'supplierf@example.com'
    ),
    (
        7,
        'Supplier G',
        'Jl. Supplier G No. 246',
        '08543217654',
        'supplig@example.com'
    ),
    (
        8,
        'Supplier H',
        'Jl. Supplier H No. 135',
        '08987654321',
        'supplierh@example.com'
    ),
    (
        9,
        'Supplier I',
        'Jl. Supplier I No. 876',
        '08123456789',
        'supplieri@example.com'
    ),
    (
        10,
        'Supplier J',
        'Jl. Supplier J No. 543',
        '0876543210',
        'supplierj@example.com'
    ),
    (
        11,
        'dasdasd',
        'asdasd',
        '12123123123',
        'ads@gmail.com'
    ),
    (
        12,
        'dasdasd',
        'asdasda',
        'asdasd',
        'test@gmail.com'
    ),
    (
        13,
        'dsadsad',
        'asdasd',
        '43231424234',
        'asdasdasd@gmail.com'
    ),
    (
        14,
        'dsadasdasd',
        'asdasdasd',
        '3243253454',
        'asde3@gmail.com'
    ),
    (
        15,
        'dasdasd',
        'asdasdasd',
        '34534534534',
        'fsdfsd324@test.com'
    ),
    (
        16,
        'dasdasd',
        'asdasdas',
        '234345453435',
        'sdcfsdfsd234@test.com'
    ),
    (
        17,
        'sdfsdfsdf',
        'sdfsdf',
        '4453543555',
        'sdfsd4@test.com'
    ),
    (
        18,
        'dsasfdfsddfs',
        'fdsdffsd',
        '345234345',
        'adsssssss@gmail.com'
    ),
    (
        19,
        'sdfsdfsdf',
        'sdfsdfsd update test 2',
        '422432434324',
        'dsadas423@test.com'
    ),
    (
        20,
        'asdasd',
        'asdasd test update lagi',
        '234234234111',
        'asdas234@test.com'
    ),
    (
        21,
        '12321323',
        '32123',
        '213213123213',
        '2sdsdsd@test.com'
    ),
    (
        23,
        'dasdasd',
        'saassa',
        '2323232323211',
        'adssasaa@gmail.com'
    ),
    (
        24,
        'asassasa',
        'asassa update',
        '213333333322',
        'adssaassasa@gmail.com'
    ),
    (
        26,
        'fsdsdfsdfsdf',
        'sdfsfdsdfsdf',
        '343243443453',
        'adswerwer342@gmail.com'
    ),
    (
        27,
        'dassdasda',
        'dfsdsfdsfdfs',
        '23434223434324',
        'adssdfsdfsdfsdf@gmail.com'
    ),
    (
        28,
        'adsas',
        'asdsadsadasd',
        '3242422342234',
        'adasdasdasds@gmail.com'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `role` enum(
        'admin',
        'user',
        'staff',
        'manager'
    ) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `role`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Admin User',
        'admin@example.com',
        NULL,
        '$2y$12$EYgp5MmABQdZOTkeiB4ktOnUE4GAnbErOy7nH554hNRkQKL2SSbQi',
        'admin',
        NULL,
        '2024-06-22 08:59:17',
        '2024-06-22 08:59:17'
    ),
    (
        2,
        'Regular User',
        'user@example.com',
        NULL,
        '$2y$12$l8KHbL7X0MMwsoFlvzAroeZGe5hZQeYIvPMsKDfOQeSnT7JJw9uzi',
        'user',
        NULL,
        '2024-06-22 08:59:17',
        '2024-06-22 08:59:17'
    ),
    (
        3,
        'Staff Member',
        'staff@example.com',
        NULL,
        '$2y$12$HFCnAczmqbt2fTa0CeDEM.EvtGv.TRSQYj4oIu/zz44q69StC80va',
        'staff',
        NULL,
        '2024-06-22 08:59:18',
        '2024-06-22 08:59:18'
    ),
    (
        4,
        'Manager User',
        'manager@example.com',
        NULL,
        '$2y$12$weHzILMkF65MckCVlQpmyeWLti3mWSMVwpfsSfKvEjwm/RKnVBQuK',
        'manager',
        NULL,
        '2024-06-22 08:59:18',
        '2024-06-22 08:59:18'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers` ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomingitems`
--
ALTER TABLE `incomingitems`
ADD PRIMARY KEY (`IncomingID`),
ADD KEY `incomingitems_transaksiid_foreign` (`TransaksiID`),
ADD KEY `incomingitems_salestransaksiid_foreign` (`SalesTransaksiID`),
ADD KEY `incomingitems_itemid_foreign` (`ItemID`);

--
-- Indexes for table `itemcategories`
--
ALTER TABLE `itemcategories` ADD PRIMARY KEY (`KategoriID`);

--
-- Indexes for table `itemrequests`
--
ALTER TABLE `itemrequests`
ADD PRIMARY KEY (`RequestID`),
ADD KEY `itemrequests_customerid_foreign` (`CustomerID`),
ADD KEY `itemrequests_itemid_foreign` (`ItemID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
ADD PRIMARY KEY (`ItemID`),
ADD KEY `items_supplierid_foreign` (`SupplierID`),
ADD KEY `items_kategoriid_foreign` (`KategoriID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outgoingitems`
--
ALTER TABLE `outgoingitems`
ADD PRIMARY KEY (`OutgoingID`),
ADD KEY `outgoingitems_transaksiid_foreign` (`TransaksiID`),
ADD KEY `outgoingitems_salestransaksiid_foreign` (`SalesTransaksiID`),
ADD KEY `outgoingitems_itemid_foreign` (`ItemID`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`,
    `tokenable_id`
);

--
-- Indexes for table `purchasetransactiondetails`
--
ALTER TABLE `purchasetransactiondetails`
ADD PRIMARY KEY (`DetailID`),
ADD KEY `purchasetransactiondetails_transaksiid_foreign` (`TransaksiID`),
ADD KEY `purchasetransactiondetails_itemid_foreign` (`ItemID`);

--
-- Indexes for table `purchasetransactions`
--
ALTER TABLE `purchasetransactions`
ADD PRIMARY KEY (`TransaksiID`),
ADD KEY `purchasetransactions_supplierid_foreign` (`SupplierID`);

--
-- Indexes for table `salestransactiondetails`
--
ALTER TABLE `salestransactiondetails`
ADD PRIMARY KEY (`DetailID`),
ADD KEY `salestransactiondetails_transaksiid_foreign` (`TransaksiID`),
ADD KEY `salestransactiondetails_itemid_foreign` (`ItemID`);

--
-- Indexes for table `salestransactions`
--
ALTER TABLE `salestransactions`
ADD PRIMARY KEY (`TransaksiID`),
ADD KEY `salestransactions_customerid_foreign` (`CustomerID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
ADD PRIMARY KEY (`SupplierID`),
ADD UNIQUE KEY `NomorTelepon` (`NomorTelepon`, `Email`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `CustomerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomingitems`
--
ALTER TABLE `incomingitems`
MODIFY `IncomingID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 15;

--
-- AUTO_INCREMENT for table `itemcategories`
--
ALTER TABLE `itemcategories`
MODIFY `KategoriID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT for table `itemrequests`
--
ALTER TABLE `itemrequests`
MODIFY `RequestID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `ItemID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 16;

--
-- AUTO_INCREMENT for table `outgoingitems`
--
ALTER TABLE `outgoingitems`
MODIFY `OutgoingID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasetransactiondetails`
--
ALTER TABLE `purchasetransactiondetails`
MODIFY `DetailID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 13;

--
-- AUTO_INCREMENT for table `purchasetransactions`
--
ALTER TABLE `purchasetransactions`
MODIFY `TransaksiID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 15;

--
-- AUTO_INCREMENT for table `salestransactiondetails`
--
ALTER TABLE `salestransactiondetails`
MODIFY `DetailID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT for table `salestransactions`
--
ALTER TABLE `salestransactions`
MODIFY `TransaksiID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 15;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
MODIFY `SupplierID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incomingitems`
--
ALTER TABLE `incomingitems`
ADD CONSTRAINT `incomingitems_itemid_foreign` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`),
ADD CONSTRAINT `incomingitems_salestransaksiid_foreign` FOREIGN KEY (`SalesTransaksiID`) REFERENCES `salestransactions` (`TransaksiID`),
ADD CONSTRAINT `incomingitems_transaksiid_foreign` FOREIGN KEY (`TransaksiID`) REFERENCES `purchasetransactions` (`TransaksiID`);

--
-- Constraints for table `itemrequests`
--
ALTER TABLE `itemrequests`
ADD CONSTRAINT `itemrequests_customerid_foreign` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
ADD CONSTRAINT `itemrequests_itemid_foreign` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
ADD CONSTRAINT `items_kategoriid_foreign` FOREIGN KEY (`KategoriID`) REFERENCES `itemcategories` (`KategoriID`) ON DELETE CASCADE,
ADD CONSTRAINT `items_supplierid_foreign` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`SupplierID`) ON DELETE CASCADE;

--
-- Constraints for table `outgoingitems`
--
ALTER TABLE `outgoingitems`
ADD CONSTRAINT `outgoingitems_itemid_foreign` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`),
ADD CONSTRAINT `outgoingitems_salestransaksiid_foreign` FOREIGN KEY (`SalesTransaksiID`) REFERENCES `salestransactions` (`TransaksiID`),
ADD CONSTRAINT `outgoingitems_transaksiid_foreign` FOREIGN KEY (`TransaksiID`) REFERENCES `purchasetransactions` (`TransaksiID`);

--
-- Constraints for table `purchasetransactiondetails`
--
ALTER TABLE `purchasetransactiondetails`
ADD CONSTRAINT `purchasetransactiondetails_itemid_foreign` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`),
ADD CONSTRAINT `purchasetransactiondetails_transaksiid_foreign` FOREIGN KEY (`TransaksiID`) REFERENCES `purchasetransactions` (`TransaksiID`);

--
-- Constraints for table `purchasetransactions`
--
ALTER TABLE `purchasetransactions`
ADD CONSTRAINT `purchasetransactions_supplierid_foreign` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`SupplierID`);

--
-- Constraints for table `salestransactiondetails`
--
ALTER TABLE `salestransactiondetails`
ADD CONSTRAINT `salestransactiondetails_itemid_foreign` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`),
ADD CONSTRAINT `salestransactiondetails_transaksiid_foreign` FOREIGN KEY (`TransaksiID`) REFERENCES `salestransactions` (`TransaksiID`);

--
-- Constraints for table `salestransactions`
--
ALTER TABLE `salestransactions`
ADD CONSTRAINT `salestransactions_customerid_foreign` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;