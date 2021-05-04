# Users


## Register a new user


Register a new user.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8080/users/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'John Doe',
            'email' => 'John@doe.com',
            'password' => '1234',
            'password_confirmation' => '1234',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/users/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "John Doe",
    "email": "John@doe.com",
    "password": "1234",
    "password_confirmation": "1234"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/users/register'
payload = {
    "name": "John Doe",
    "email": "John@doe.com",
    "password": "1234",
    "password_confirmation": "1234"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```

```bash
curl -X POST \
    "http://localhost:8080/users/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"John Doe","email":"John@doe.com","password":"1234","password_confirmation":"1234"}'

```


> Example response (200):

```json
{
    "name": "nicolas",
    "email": "ngretten@gmail.fr",
    "updated_at": "2021-05-04T11:11:46.000000Z",
    "created_at": "2021-05-04T11:11:46.000000Z"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`users/register`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>name</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Name

<code><b>email</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Email

<code><b>password</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Password

<code><b>password_confirmation</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Password confirmation



## Login a user


Login a user.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8080/users/signIn',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'john@doe.com',
            'password' => '1234',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/users/signIn"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "john@doe.com",
    "password": "1234"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/users/signIn'
payload = {
    "email": "john@doe.com",
    "password": "1234"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```

```bash
curl -X POST \
    "http://localhost:8080/users/signIn" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"john@doe.com","password":"1234"}'

```


> Example response (200):

```json
{
    "status": "Connected",
    "credentials": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODA4MFwvdXNlcnNcL3NpZ25JbiIsImlhdCI6MTYyMDEyNTk3NCwiZXhwIjoxNjIwMTI5NTc0LCJuYmYiOjE2MjAxMjU5NzQsImp0aSI6ImYwVENwU1RXQWVHeThuNloiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ezjU8fFW5rGH7D7Q2D3egwUVx3MDKqrPF4ObD482HpE",
        "token_type": "bearer",
        "expires_in": 360000
    }
}
```

### Request
<small class="badge badge-black">POST</small>
 **`users/signIn`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>email</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Email

<code><b>password</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    password




