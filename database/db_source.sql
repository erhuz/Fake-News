CREATE TABLE IF NOT EXISTS "users" (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT NOT NULL,
                    email TEXT NOT NULL,
                    password TEXT NOT NULL,
                    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
                    );

CREATE TABLE IF NOT EXISTS "posts" (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    title TEXT NOT NULL,
                    content TEXT NOT NULL,
                    author INTEGER,
                    likes INTEGER NOT NULL,
                    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    FOREIGN KEY (id) REFERENCES users(id)
                    );