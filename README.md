# About ChatApp

####Chats by dates GET metgod

http://chatapp.rickstoit.nl/api/message/date/2020-02-20 08:00:00

or all chats http://chatapp.rickstoit.nl/api/message/
```
[
    {
        "id": 1,
        "user_id": 1,
        "message": "hoihoi12",
        "created_at": "2020-02-21 13:00:01",
        "user": {
            "id": 1,
            "name": "John Doe",
            "email": "example@example.com",
            "role": 0,
            "email_verified_at": "2020-02-21 10:17:59",
            "last_online_at": "2020-02-21 14:11:41",
            "created_at": "2020-02-21 10:17:43",
            "updated_at": "2020-02-21 14:11:41"
        }
    },
    ....
]
```

###Register POST Method
Post on keys "name", "email" and "password"

http://localhost/ChatApp/public/api/register
````
{
    "success": true
}
````

###Login POST Method
Post on keys "name"" and "password"

http://localhost/ChatApp/public/api/register
````
{
    "user": {
        "id": 2,
        "name": "John Doe",
        "email": "example@example.nl",
        "role": 0,
        "email_verified_at": "2020-02-21 10:59:01",
        "last_online_at": "2020-02-21 12:40:54",
        "created_at": "2020-02-21 10:51:34",
        "updated_at": "2020-02-21 12:40:54"
    },
    "api_token": "MkuDwDPeNX4cfmjfN9M3Hb59t4KI1oQRP0YvFNS2ZfeHS1LwN8LNKeVAdON0",
    "success": true
}
````
