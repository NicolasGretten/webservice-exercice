# Articles


## Retrieve an article


Retrieve an article by his ID.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8080/blog/articles/1*',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/blog/articles/1*"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/blog/articles/1*'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost:8080/blog/articles/1*" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
[
    {
        "id": 1,
        "titre": "Quas et cumque sunt numquam.",
        "description": "Pariatur a et blanditiis praesentium porro ipsum eius similique dolores voluptatibus debitis et soluta commodi quidem facilis vel ipsa vero quam explicabo et eaque aut dolor.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`blog/articles/{article_id}`**

<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<code><b>article_id</b></code>&nbsp;      <br>
    Article ID



## List all the articles


List all the articles.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8080/blog/articles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/blog/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'http://localhost:8080/blog/articles'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```

```bash
curl -X GET \
    -G "http://localhost:8080/blog/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
[
    {
        "id": 1,
        "titre": "Quas et cumque sunt numquam.",
        "description": "Pariatur a et blanditiis praesentium porro ipsum eius similique dolores voluptatibus debitis et soluta commodi quidem facilis vel ipsa vero quam explicabo et eaque aut dolor.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 2,
        "titre": "Quia et odio consectetur.",
        "description": "Omnis repudiandae fugit ipsam reiciendis ipsa omnis alias numquam sunt culpa cum reiciendis ut dolor tempora voluptatum aut placeat vel ratione placeat distinctio rerum asperiores rem et quam unde perferendis explicabo nam.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 3,
        "titre": "Illo quam porro voluptates.",
        "description": "Neque voluptatem alias tempora ipsa voluptas debitis quae assumenda voluptatum ut libero reprehenderit error dolor quia officiis et doloremque molestias dolores.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 4,
        "titre": "Qui omnis labore.",
        "description": "Quia perspiciatis voluptatum ut consectetur accusantium architecto numquam in corrupti voluptates labore omnis amet ipsam inventore aut dolorem quasi deserunt eligendi hic voluptas velit veniam aut illo non est vitae.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 5,
        "titre": "Aliquid quibusdam reiciendis est.",
        "description": "Commodi officiis alias deserunt occaecati accusantium cumque at eum vero non labore expedita dolorum totam doloribus vitae quibusdam.",
        "created_at": "2021-05-03T12:00:13.000000Z",
        "updated_at": "2021-05-03T12:00:13.000000Z"
    },
    {
        "id": 6,
        "titre": "test post",
        "description": "ceci est un test sur la route post",
        "created_at": "2021-05-04T06:52:19.000000Z",
        "updated_at": "2021-05-04T06:52:19.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`blog/articles`**



## Create a new article


Create a new article.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8080/blog/articles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'titre' => 'Le Titre',
            'description' => 'Lorem ipsum',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8080/blog/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "titre": "Le Titre",
    "description": "Lorem ipsum"
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

url = 'http://localhost:8080/blog/articles'
payload = {
    "titre": "Le Titre",
    "description": "Lorem ipsum"
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
    "http://localhost:8080/blog/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"titre":"Le Titre","description":"Lorem ipsum"}'

```


> Example response (200):

```json
{
    "titre": "test post",
    "description": "ceci est un test sur la route post",
    "updated_at": "2021-05-04T06:52:19.000000Z",
    "created_at": "2021-05-04T06:52:19.000000Z"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`blog/articles`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>titre</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Titre de l'article

<code><b>description</b></code>&nbsp; <small>required</small>         <i>optional</i>    <br>
    Contenu de l'article




