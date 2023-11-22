<?php
$db_connection = new PDO('SCHOOL90SQLITE ПУТЬ УКАЖИ');

function create_table()
{
    global $db_connection;
    try {
        return $db_connection->query(
            'CREATE TABLE IF NOT EXISTS student_credentials(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                last_name VARCHAR NOT NULL,
                class INTEGER NOT NULL,
                year_of_admission INTEGER NOT NULL,
                instructions TEXT);'
        );
    } catch (PDOException $e) {
        echo "fuck!@*";
        echo $e;
    }
}

class StudentCredentialsRepositoty
{
    private PDO $db_connection;

    public function __construct(PDO $db_connection)
    {
        $this->db_connection = $db_connection;
    }

    public function CreateEntry(array $request)
    {
        $query = $this->db_connection->prepare(
            'INSERT INTO student_credentials(last_name, class, year_of_admission, instructions)
            VALUES(:last_name, :class, :year_of_admission, :instructions);'
        );

        return $query->execute(
            [
                'last_name' => $request['lastName'],
                'class' => intval($request['class']),
                'year_of_admission' => intval($request['yearOfAdmission']),
                'instructions' => $request['instructions']
            ]
        );
    }

    public function ShowAll(): mixed
    {
        return $this->db_connection->query('SELECT * FROM student_credentials;')->fetchAll();
    }

    public function GetEntry(int $id)
    {
        return $this->db_connection->query("SELECT * FROM student_credentials WHERE id={$id};");
    }
}

create_table();
$repo = new StudentCredentialsRepositoty($db_connection);

