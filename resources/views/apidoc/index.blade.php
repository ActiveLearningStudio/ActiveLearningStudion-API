<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php","python"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Authentication</h1>
<p>APIs for Authentication</p>
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
<h2>Register</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"distinctio","last_name":"repellendus","email":"et","password":"inventore","organization_name":"tenetur","job_title":"recusandae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "distinctio",
    "last_name": "repellendus",
    "email": "et",
    "password": "inventore",
    "organization_name": "tenetur",
    "job_title": "recusandae"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'first_name' =&gt; 'distinctio',
            'last_name' =&gt; 'repellendus',
            'email' =&gt; 'et',
            'password' =&gt; 'inventore',
            'organization_name' =&gt; 'tenetur',
            'job_title' =&gt; 'recusandae',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/register'
payload = {
    "first_name": "distinctio",
    "last_name": "repellendus",
    "email": "et",
    "password": "inventore",
    "organization_name": "tenetur",
    "job_title": "recusandae"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Verification email is sent. Please follow the instructions."
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Could not create user account. Please try again later."
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>First name of user</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>required</td>
<td>Last name of user</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>Email of user</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>Password</td>
</tr>
<tr>
<td><code>organization_name</code></td>
<td>string</td>
<td>required</td>
<td>Organization name of user</td>
</tr>
<tr>
<td><code>job_title</code></td>
<td>string</td>
<td>required</td>
<td>Job title of user</td>
</tr>
</tbody>
</table>
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
<h2>Login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"aut","password":"maxime"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "aut",
    "password": "maxime"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'aut',
            'password' =&gt; 'maxime',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/login'
payload = {
    "email": "aut",
    "password": "maxime"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "user": {
        "id": 1,
        "first_name": "Test",
        "last_name": "User",
        "name": "test@test.com",
        "email": "test@test.com",
        "organization_name": "Curriki",
        "organization_type": null,
        "job_title": "Developer",
        "address": null,
        "phone_number": null,
        "website": null,
        "hubspot": false,
        "subscribed": true,
        "created_at": "2020-08-26T11:28:16.000000Z",
        "updated_at": "2020-09-10T15:08:45.000000Z",
        "gapi_access_token": null
    },
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBjMGJhY..."
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Invalid Credentials"
    ]
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Email is not verified."
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/login</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The email of user</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The password corresponded the email</td>
</tr>
</tbody>
</table>
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->
<!-- START_dfdabf7067a240e78a267dec688cb0f1 -->
<h2>Login with Google</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/login/google" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login/google"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/login/google',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/login/google'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Unable to login with Google"
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/login/google</code></p>
<!-- END_dfdabf7067a240e78a267dec688cb0f1 -->
<!-- START_78c4b7d6388c81c68bc37ec872d44f65 -->
<h2>Forgot Password Email</h2>
<p>Send a reset link to the given user.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"dicta"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/forgot-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "dicta"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/forgot-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'dicta',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/forgot-password'
payload = {
    "email": "dicta"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Password reset email has been sent. Please follow the instructions."
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Email is not verified."
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/forgot-password</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The email of user</td>
</tr>
</tbody>
</table>
<!-- END_78c4b7d6388c81c68bc37ec872d44f65 -->
<!-- START_c0e8219f309b296fd587bc241557abce -->
<h2>Verify Email Address</h2>
<p>Mark the authenticated user&#039;s email address as verified.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/verify-email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"itaque","hash":"eligendi","signature":"architecto","expires":"temporibus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/verify-email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "itaque",
    "hash": "eligendi",
    "signature": "architecto",
    "expires": "temporibus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/verify-email',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'id' =&gt; 'itaque',
            'hash' =&gt; 'eligendi',
            'signature' =&gt; 'architecto',
            'expires' =&gt; 'temporibus',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/verify-email'
payload = {
    "id": "itaque",
    "hash": "eligendi",
    "signature": "architecto",
    "expires": "temporibus"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (204):</p>
</blockquote>
<pre><code class="language-json">{}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/verify-email</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>hash</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>signature</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>expires</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_c0e8219f309b296fd587bc241557abce -->
<!-- START_61739f3220a224b34228600649230ad1 -->
<h2>Logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "You have been successfully logged out."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/logout</code></p>
<!-- END_61739f3220a224b34228600649230ad1 -->
<h1>CurrikiGo</h1>
<!-- START_83cdba63ab1e5c866e17cd2146376a02 -->
<h2>Publish a Playlist to Canvas</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/go/canvas/projects/veniam/playlists/molestiae/publish" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"setting_id":11,"counter":19}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/canvas/projects/veniam/playlists/molestiae/publish"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_id": 11,
    "counter": 19
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/go/canvas/projects/veniam/playlists/molestiae/publish',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'setting_id' =&gt; 11,
            'counter' =&gt; 19,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/canvas/projects/veniam/playlists/molestiae/publish'
payload = {
    "setting_id": 11,
    "counter": 19
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Invalid project or playlist Id."
}</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "You are not authorized to perform this action."
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Error sending playlists to canvas."
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "playlist": {
        "id": 112,
        "title": "Development Setup",
        "position": 4,
        "type": "ExternalTool",
        "module_id": 26,
        "content_id": 0,
        "html_url": "https:\/\/canvas2.curriki.org\/courses\/32\/modules\/items\/112",
        "url": "https:\/\/canvas2.curriki.org\/api\/v1\/courses\/32\/external_tools\/sessionless_launch?launch_type=module_item&amp;module_item_id=112",
        "external_url": "https:\/\/tsugi.curriki.org\/mod\/curriki\/?playlist=5",
        "new_tab": false,
        "completion_requirement": {
            "type": "must_view"
        },
        "published": false,
        "indent": 0
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/go/canvas/projects/{project}/playlists/{playlist}/publish</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project</code></td>
<td>required</td>
<td>The ID of the project</td>
</tr>
<tr>
<td><code>playlist</code></td>
<td>required</td>
<td>The ID of the playlist.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>setting_id</code></td>
<td>integer</td>
<td>optional</td>
<td>The id of the LMS setting.</td>
</tr>
<tr>
<td><code>counter</code></td>
<td>integer</td>
<td>optional</td>
<td>The counter for uniqueness of the title</td>
</tr>
</tbody>
</table>
<!-- END_83cdba63ab1e5c866e17cd2146376a02 -->
<!-- START_782eed28046b7e5741ad6b964688c0e6 -->
<h2>Fetch a course from Canvas</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/go/canvas/projects/aliquid/fetch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"setting_id":16}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/canvas/projects/aliquid/fetch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_id": 16
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/go/canvas/projects/aliquid/fetch',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'setting_id' =&gt; 16,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/canvas/projects/aliquid/fetch'
payload = {
    "setting_id": 16
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Validation error"
}</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "You are not authorized to perform this action."
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "project": {
        "course": "How to build a playlist in CurrikiStudio",
        "playlists": [
            "Playlist 1",
            "Playlist 2",
            "Playlist 3",
            "Playlist 4"
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/go/canvas/projects/{project}/fetch</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project</code></td>
<td>required</td>
<td>The ID of the project.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>setting_id</code></td>
<td>integer</td>
<td>optional</td>
<td>The id of the LMS setting.</td>
</tr>
</tbody>
</table>
<!-- END_782eed28046b7e5741ad6b964688c0e6 -->
<!-- START_0905144b5be99fb831597258540ec397 -->
<h2>Publish a Playlist to Moodle</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/go/moodle/projects/ut/playlists/necessitatibus/publish" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"setting_id":4,"counter":7}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/moodle/projects/ut/playlists/necessitatibus/publish"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_id": 4,
    "counter": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/go/moodle/projects/ut/playlists/necessitatibus/publish',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'setting_id' =&gt; 4,
            'counter' =&gt; 7,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/moodle/projects/ut/playlists/necessitatibus/publish'
payload = {
    "setting_id": 4,
    "counter": 7
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/go/moodle/projects/{project}/playlists/{playlist}/publish</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project</code></td>
<td>required</td>
<td>The ID of the project</td>
</tr>
<tr>
<td><code>playlist</code></td>
<td>required</td>
<td>The ID of the playlist.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>setting_id</code></td>
<td>integer</td>
<td>optional</td>
<td>The id of the LMS setting.</td>
</tr>
<tr>
<td><code>counter</code></td>
<td>integer</td>
<td>optional</td>
<td>The counter for uniqueness of the title</td>
</tr>
</tbody>
</table>
<!-- END_0905144b5be99fb831597258540ec397 -->
<!-- START_7d005843403e7f5566412f95fcfe62fc -->
<h2>Fetch a course from Moodle</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/go/moodle/projects/et/fetch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"setting_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/moodle/projects/et/fetch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "setting_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/go/moodle/projects/et/fetch',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'setting_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/moodle/projects/et/fetch'
payload = {
    "setting_id": 1
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Validation error"
}</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "You are not authorized to perform this action."
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "project": {
        "course": "How to build a playlist in CurrikiStudio",
        "playlists": [
            "Playlist 1",
            "Playlist 2",
            "Playlist 3",
            "Playlist 4"
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/go/moodle/projects/{project}/fetch</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project</code></td>
<td>required</td>
<td>The ID of the project.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>setting_id</code></td>
<td>integer</td>
<td>optional</td>
<td>The id of the LMS setting.</td>
</tr>
</tbody>
</table>
<!-- END_7d005843403e7f5566412f95fcfe62fc -->
<h1>Google Classroom</h1>
<!-- START_e1403a4791b2f9419c8bb0bea0c91ceb -->
<h2>Save Access Token</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Save GAPI access token in the database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/google-classroom/access-token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"access_token":"non"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/google-classroom/access-token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "access_token": "non"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/google-classroom/access-token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'access_token' =&gt; 'non',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/google-classroom/access-token'
payload = {
    "access_token": "non"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Access Token Saved successfully"
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Validation error: Access token is required"
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Failed to save the token."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/google-classroom/access-token</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>access_token</code></td>
<td>string</td>
<td>required</td>
<td>The stringified JSON of the GAPI access token object</td>
</tr>
</tbody>
</table>
<!-- END_e1403a4791b2f9419c8bb0bea0c91ceb -->
<!-- START_679513c6d9a3e7633325d5e35620d09d -->
<h2>Get Courses</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Get all existing Google Classroom Courses</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/google-classroom/courses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/google-classroom/courses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/google-classroom/courses',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/google-classroom/courses'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Service exception error"
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "courses": [
        {
            "id": "1",
            "name": "How to build a playlist in CurrikiStudio"
        },
        {
            "id": "2",
            "name": "Partner Content Projects"
        },
        {
            "id": "3",
            "name": "Our Great BIg Back Yard"
        },
        {
            "id": "4",
            "name": "Alice in Wonderland"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/google-classroom/courses</code></p>
<!-- END_679513c6d9a3e7633325d5e35620d09d -->
<!-- START_3f6177f199294bd05304ded78263e7fc -->
<h2>Copy project to Google Classroom</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Copy whole project to google classroom either as a new course
or into an existing course.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/google-classroom/projects/9/copy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"course_id":"123"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/google-classroom/projects/9/copy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "course_id": "123"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/google-classroom/projects/9/copy',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'course_id' =&gt; '123',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/google-classroom/projects/9/copy'
payload = {
    "course_id": "123"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Forbidden. You are trying to share other user's project."
}</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": "Failed to save the token."
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "course": {
        "id": "158432479402",
        "name": "Partner Content Projects",
        "topics": [
            {
                "course_id": "158432479402",
                "topic_id": "158409588847",
                "name": "NBC Learn",
                "course_work": [
                    {
                        "id": "158442674345",
                        "course_id": "158432479402",
                        "description": null,
                        "topic_id": "158409588847",
                        "title": "Test Activity 1 - 1",
                        "state": "PUBLISHED",
                        "work_type": "ASSIGNMENT",
                        "materials": [
                            {
                                "link": {
                                    "thumbnailUrl": null,
                                    "title": null,
                                    "url": "http:\/\/localhost:3000\/shared\/activity\/10"
                                }
                            }
                        ],
                        "max_points": null
                    },
                    {
                        "id": "158442674350",
                        "course_id": "158432479402",
                        "description": null,
                        "topic_id": "158409588847",
                        "title": "Test Activity 1 - 0",
                        "state": "PUBLISHED",
                        "work_type": "ASSIGNMENT",
                        "materials": [
                            {
                                "link": {
                                    "thumbnailUrl": null,
                                    "title": null,
                                    "url": "http:\/\/localhost:3000\/shared\/activity\/9"
                                }
                            }
                        ],
                        "max_points": null
                    }
                ]
            },
            {
                "course_id": "158432479402",
                "topic_id": "158410401228",
                "name": "Internal",
                "course_work": [
                    {
                        "id": "158443047525",
                        "course_id": "158432479402",
                        "description": null,
                        "topic_id": "158410401228",
                        "title": "Test Activity 1 - 0",
                        "state": "PUBLISHED",
                        "work_type": "ASSIGNMENT",
                        "materials": [
                            {
                                "link": {
                                    "thumbnailUrl": null,
                                    "title": null,
                                    "url": "http:\/\/localhost:3000\/shared\/activity\/11"
                                }
                            }
                        ],
                        "max_points": null
                    }
                ]
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/google-classroom/projects/{project}/copy</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>project</code></td>
<td>required</td>
<td>The ID of the project.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>course_id</code></td>
<td>string</td>
<td>optional</td>
<td>ID of an existing Google Classroom course.</td>
</tr>
</tbody>
</table>
<!-- END_3f6177f199294bd05304ded78263e7fc -->
<h1>H5P</h1>
<!-- START_63e3a887440ff6d148ca0a5d5957983a -->
<h2>List of H5Ps</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Display a listing of the H5Ps</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p</code></p>
<!-- END_63e3a887440ff6d148ca0a5d5957983a -->
<!-- START_d968691305763106f6c10964bbe80ee1 -->
<h2>H5P create settings</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/create</code></p>
<!-- END_d968691305763106f6c10964bbe80ee1 -->
<!-- START_be26525cce0877341cba62b279e3bcf6 -->
<h2>Store H5P</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/h5p" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/h5p',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/h5p</code></p>
<!-- END_be26525cce0877341cba62b279e3bcf6 -->
<!-- START_8614b9901a28821625ac19188ad8ea69 -->
<h2>Retrive H5P based on id to display</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/{}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/{}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/{}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/{}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/{}</code></p>
<!-- END_8614b9901a28821625ac19188ad8ea69 -->
<!-- START_29ccc5ce276a1e03649154df4dfc99a9 -->
<h2>Retrieve H5P based on id</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/{}/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/{}/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/{}/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/{}/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/{}/edit</code></p>
<!-- END_29ccc5ce276a1e03649154df4dfc99a9 -->
<!-- START_a1bff8f2dd47bd9fe0b7f2df3200d70a -->
<h2>Update H5P based on id</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/h5p/{}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/{}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/h5p/{}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/{}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/h5p/{}</code></p>
<p><code>PATCH api/v1/h5p/{}</code></p>
<!-- END_a1bff8f2dd47bd9fe0b7f2df3200d70a -->
<!-- START_2841931e4c7de3832118059ead982a92 -->
<h2>api/v1/h5p/{}</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/h5p/{}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/{}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/h5p/{}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/{}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/h5p/{}</code></p>
<!-- END_2841931e4c7de3832118059ead982a92 -->
<!-- START_369293816da1be491c68109d134f702b -->
<h2>H5P create settings</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/settings',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/settings'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/settings</code></p>
<!-- END_369293816da1be491c68109d134f702b -->
<!-- START_3cf2d9c2bc8d0e0e4cb6b9ad388302a2 -->
<h2>Retrive H5P based on Activity</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/activity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/activity/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/activity/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/activity/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/activity/{activity}</code></p>
<!-- END_3cf2d9c2bc8d0e0e4cb6b9ad388302a2 -->
<!-- START_fd28ca0ce6ea9423c15ba7ff19def822 -->
<h2>Retrive H5P based on Activity</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/activity/1/visibility/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/activity/1/visibility/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/activity/1/visibility/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/activity/1/visibility/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "h5p_activity": {
        "id": 1,
        "title": "",
        "type": "h5p",
        "content": "",
        "shared": false,
        "order": 2,
        "thumb_url": null,
        "subject_id": null,
        "education_level_id": null,
        "h5p": {
            "settings": {
                "baseUrl": "http:\/\/localhost:8000",
                "url": "http:\/\/localhost:8000\/storage\/h5p",
                "postUserStatistics": false,
                "ajax": {
                    "setFinished": "http:\/\/localhost:8000\/api\/h5p\/ajax\/url",
                    "contentUserData": "http:\/\/localhost:8000\/api\/h5p\/ajax\/content-user-data\/?content_id=:contentId&amp;data_type=:dataType&amp;sub_content_id=:subContentId"
                },
                "saveFreq": false,
                "siteUrl": "http:\/\/localhost:8000",
                "l10n": {
                    "H5P": {
                        "fullscreen": "Fullscreen",
                        "disableFullscreen": "Disable fullscreen",
                        "download": "Download",
                        "copyrights": "Rights of use",
                        "embed": "Embed",
                        "reuseDescription": "Reuse this content.",
                        "size": "Size",
                        "showAdvanced": "Show advanced",
                        "hideAdvanced": "Hide advanced",
                        "advancedHelp": "Include this script on your website if you want dynamic sizing of the embedded content:",
                        "copyrightInformation": "Rights of use",
                        "close": "Close",
                        "title": "Title",
                        "author": "Author",
                        "year": "Year",
                        "source": "Source",
                        "license": "License",
                        "thumbnail": "Thumbnail",
                        "noCopyrights": "No copyright information available for this content.",
                        "downloadDescription": "Download this content as a H5P file.",
                        "copyrightsDescription": "View copyright information for this content.",
                        "embedDescription": "View the embed code for this content.",
                        "h5pDescription": "Visit H5P.org to check out more cool content.",
                        "contentChanged": "This content has changed since you last used it.",
                        "startingOver": "You'll be starting over.",
                        "confirmDialogHeader": "Confirm action",
                        "confirmDialogBody": "Please confirm that you wish to proceed. This action is not reversible.",
                        "cancelLabel": "Cancel",
                        "confirmLabel": "Confirm",
                        "reuse": "Reuse",
                        "reuseContent": "Reuse Content"
                    }
                },
                "hubIsEnabled": false,
                "editor": {
                    "filesPath": "http:\/\/localhost:8000\/storage\/h5p\/editor",
                    "fileIcon": {
                        "path": "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/images\/binary-file.png",
                        "width": 50,
                        "height": 50
                    },
                    "ajaxPath": "http:\/\/localhost:8000\/api\/v1\/h5p\/ajax\/",
                    "libraryUrl": "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/",
                    "copyrightSemantics": {
                        "name": "copyright",
                        "type": "group",
                        "label": "Copyright information",
                        "fields": [
                            {
                                "name": "title",
                                "type": "text",
                                "label": "Title",
                                "placeholder": "La Gioconda",
                                "optional": true
                            },
                            {
                                "name": "author",
                                "type": "text",
                                "label": "Author",
                                "placeholder": "Leonardo da Vinci",
                                "optional": true
                            },
                            {
                                "name": "year",
                                "type": "text",
                                "label": "Year(s)",
                                "placeholder": "1503 - 1517",
                                "optional": true
                            },
                            {
                                "name": "source",
                                "type": "text",
                                "label": "Source",
                                "placeholder": "http:\/\/en.wikipedia.org\/wiki\/Mona_Lisa",
                                "optional": true,
                                "regexp": {
                                    "pattern": "^http[s]?:\/\/.+",
                                    "modifiers": "i"
                                }
                            },
                            {
                                "name": "license",
                                "type": "select",
                                "label": "License",
                                "default": "U",
                                "options": [
                                    {
                                        "value": "U",
                                        "label": "Undisclosed"
                                    },
                                    {
                                        "value": "CC BY",
                                        "label": "Attribution",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-SA",
                                        "label": "Attribution-ShareAlike",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-ND",
                                        "label": "Attribution-NoDerivs",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC",
                                        "label": "Attribution-NonCommercial",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC-SA",
                                        "label": "Attribution-NonCommercial-ShareAlike",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC-ND",
                                        "label": "Attribution-NonCommercial-NoDerivs",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "GNU GPL",
                                        "label": "General Public License",
                                        "versions": [
                                            {
                                                "value": "v3",
                                                "label": "Version 3"
                                            },
                                            {
                                                "value": "v2",
                                                "label": "Version 2"
                                            },
                                            {
                                                "value": "v1",
                                                "label": "Version 1"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "PD",
                                        "label": "Public Domain",
                                        "versions": [
                                            {
                                                "value": "-",
                                                "label": "-"
                                            },
                                            {
                                                "value": "CC0 1.0",
                                                "label": "CC0 1.0 Universal"
                                            },
                                            {
                                                "value": "CC PDM",
                                                "label": "Public Domain Mark"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "C",
                                        "label": "Copyright"
                                    }
                                ]
                            },
                            {
                                "name": "version",
                                "type": "select",
                                "label": "License Version",
                                "options": []
                            }
                        ]
                    },
                    "metadataSemantics": [
                        {
                            "name": "title",
                            "type": "text",
                            "label": "Title",
                            "placeholder": "La Gioconda"
                        },
                        {
                            "name": "license",
                            "type": "select",
                            "label": "License",
                            "default": "U",
                            "options": [
                                {
                                    "value": "U",
                                    "label": "Undisclosed"
                                },
                                {
                                    "type": "optgroup",
                                    "label": "Creative Commons",
                                    "options": [
                                        {
                                            "value": "CC BY",
                                            "label": "Attribution (CC BY)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC BY-SA",
                                            "label": "Attribution-ShareAlike (CC BY-SA)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC BY-ND",
                                            "label": "Attribution-NoDerivs (CC BY-ND)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC BY-NC",
                                            "label": "Attribution-NonCommercial (CC BY-NC)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC BY-NC-SA",
                                            "label": "Attribution-NonCommercial-ShareAlike (CC BY-NC-SA)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC BY-NC-ND",
                                            "label": "Attribution-NonCommercial-NoDerivs (CC BY-NC-ND)",
                                            "versions": [
                                                {
                                                    "value": "4.0",
                                                    "label": "4.0 International"
                                                },
                                                {
                                                    "value": "3.0",
                                                    "label": "3.0 Unported"
                                                },
                                                {
                                                    "value": "2.5",
                                                    "label": "2.5 Generic"
                                                },
                                                {
                                                    "value": "2.0",
                                                    "label": "2.0 Generic"
                                                },
                                                {
                                                    "value": "1.0",
                                                    "label": "1.0 Generic"
                                                }
                                            ]
                                        },
                                        {
                                            "value": "CC0 1.0",
                                            "label": "Public Domain Dedication (CC0)"
                                        },
                                        {
                                            "value": "CC PDM",
                                            "label": "Public Domain Mark (PDM)"
                                        }
                                    ]
                                },
                                {
                                    "value": "GNU GPL",
                                    "label": "General Public License v3"
                                },
                                {
                                    "value": "PD",
                                    "label": "Public Domain"
                                },
                                {
                                    "value": "ODC PDDL",
                                    "label": "Public Domain Dedication and Licence"
                                },
                                {
                                    "value": "C",
                                    "label": "Copyright"
                                }
                            ]
                        },
                        {
                            "name": "licenseVersion",
                            "type": "select",
                            "label": "License Version",
                            "options": [
                                {
                                    "value": "4.0",
                                    "label": "4.0 International"
                                },
                                {
                                    "value": "3.0",
                                    "label": "3.0 Unported"
                                },
                                {
                                    "value": "2.5",
                                    "label": "2.5 Generic"
                                },
                                {
                                    "value": "2.0",
                                    "label": "2.0 Generic"
                                },
                                {
                                    "value": "1.0",
                                    "label": "1.0 Generic"
                                }
                            ],
                            "optional": true
                        },
                        {
                            "name": "yearFrom",
                            "type": "number",
                            "label": "Years (from)",
                            "placeholder": "1991",
                            "min": "-9999",
                            "max": "9999",
                            "optional": true
                        },
                        {
                            "name": "yearTo",
                            "type": "number",
                            "label": "Years (to)",
                            "placeholder": "1992",
                            "min": "-9999",
                            "max": "9999",
                            "optional": true
                        },
                        {
                            "name": "source",
                            "type": "text",
                            "label": "Source",
                            "placeholder": "https:\/\/",
                            "optional": true
                        },
                        {
                            "name": "authors",
                            "type": "list",
                            "field": {
                                "name": "author",
                                "type": "group",
                                "fields": [
                                    {
                                        "label": "Author's name",
                                        "name": "name",
                                        "optional": true,
                                        "type": "text"
                                    },
                                    {
                                        "name": "role",
                                        "type": "select",
                                        "label": "Author's role",
                                        "default": "Author",
                                        "options": [
                                            {
                                                "value": "Author",
                                                "label": "Author"
                                            },
                                            {
                                                "value": "Editor",
                                                "label": "Editor"
                                            },
                                            {
                                                "value": "Licensee",
                                                "label": "Licensee"
                                            },
                                            {
                                                "value": "Originator",
                                                "label": "Originator"
                                            }
                                        ]
                                    }
                                ]
                            }
                        },
                        {
                            "name": "licenseExtras",
                            "type": "text",
                            "widget": "textarea",
                            "label": "License Extras",
                            "optional": true,
                            "description": "Any additional information about the license"
                        },
                        {
                            "name": "changes",
                            "type": "list",
                            "field": {
                                "name": "change",
                                "type": "group",
                                "label": "Changelog",
                                "fields": [
                                    {
                                        "name": "date",
                                        "type": "text",
                                        "label": "Date",
                                        "optional": true
                                    },
                                    {
                                        "name": "author",
                                        "type": "text",
                                        "label": "Changed by",
                                        "optional": true
                                    },
                                    {
                                        "name": "log",
                                        "type": "text",
                                        "widget": "textarea",
                                        "label": "Description of change",
                                        "placeholder": "Photo cropped, text changed, etc.",
                                        "optional": true
                                    }
                                ]
                            }
                        },
                        {
                            "name": "authorComments",
                            "type": "text",
                            "widget": "textarea",
                            "label": "Author comments",
                            "description": "Comments for the editor of the content (This text will not be published as a part of copyright info)",
                            "optional": true
                        },
                        {
                            "name": "contentType",
                            "type": "text",
                            "widget": "none"
                        },
                        {
                            "name": "defaultLanguage",
                            "type": "text",
                            "widget": "none"
                        }
                    ],
                    "assets": {
                        "css": [
                            "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/css\/laravel-h5p.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-confirmation-dialog.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-core-button.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/libs\/darkroom.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/h5p-hub-client.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/fonts.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/application.css",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/libs\/zebra_datepicker.min.css"
                        ],
                        "js": [
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/jquery.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-event-dispatcher.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api-event.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-content-type.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-confirmation-dialog.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-action-bar.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/request-queue.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-editor.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p-editor.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5p-hub-client.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-semantic-structure.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library-selector.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-fullscreen-bar.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-form.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-text.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-html.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-number.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-textarea.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-file-uploader.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-file.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-image.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-image-popup.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-av.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-group.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-boolean.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-list.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-list-editor.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library-list-cache.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-select.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-selector-hub.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-selector-legacy.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-dimensions.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-coordinates.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-none.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata-author-widget.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata-changelog-widget.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-pre-save.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/ckeditor\/ckeditor.js",
                            "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/language\/en.js"
                        ]
                    },
                    "deleteMessage": "laravel-h5p.content.destoryed",
                    "apiVersion": {
                        "majorVersion": 1,
                        "minorVersion": 24
                    }
                },
                "loadedJs": [],
                "loadedCss": [],
                "core": {
                    "styles": [
                        "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/css\/laravel-h5p.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-confirmation-dialog.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-core-button.css"
                    ],
                    "scripts": [
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/jquery.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-event-dispatcher.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api-event.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-content-type.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-confirmation-dialog.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-action-bar.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/request-queue.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-editor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9"
                    ]
                },
                "contents": {
                    "cid-59": {
                        "library": "H5P.InteractiveVideo 1.21",
                        "jsonContent": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                        "fullScreen": 1,
                        "exportUrl": "http:\/\/localhost:8000\/api\/v1\/h5p\/export\/59",
                        "embedCode": "&lt;iframe src=\"http:\/\/localhost:3000\/h5p\/embed\/59\" width=\":w\" height=\":h\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"&gt;&lt;\/iframe&gt;",
                        "resizeCode": "&lt;script src=\"http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-resizer.js\" charset=\"UTF-8\"&gt;&lt;\/script&gt;",
                        "url": "http:\/\/localhost:8000\/h5p\/embed\/59",
                        "title": "Science of Golf: Why Balls Have Dimples",
                        "displayOptions": {
                            "frame": true,
                            "export": true,
                            "embed": true,
                            "copyright": false,
                            "icon": true,
                            "copy": false
                        },
                        "contentUserData": [
                            {
                                "state": "{}"
                            }
                        ],
                        "scripts": [
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/Drop-1.0\/js\/drop.min.js?ver=1.0.2",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Transition-1.0\/transition.js?ver=1.0.4",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/question.js?ver=1.4.7",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/explainer.js?ver=1.4.7",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/score-points.js?ver=1.4.7",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SoundJS-1.0\/soundjs-0.6.2.min.js?ver=1.0.2",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/stop-watch.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/sound-effects.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/xapi-event-builder.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/result-slide.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/solution-view.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice-alternative.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice-set.js?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/stop-watch.js?ver=1.10.8",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/xapi-event-builder.js?ver=1.10.8",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/summary.js?ver=1.10.8",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNDrop-1.1\/drag-n-drop.js?ver=1.1.5",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNResize-1.2\/H5P.DragNResize.js?ver=1.2.6",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar.js?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/context-menu.js?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/dialog.js?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar-element.js?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar-form-manager.js?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/flowplayer-1.0\/scripts\/flowplayer-3.2.12.min.js?ver=1.0.5",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/youtube.js?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/panopto.js?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/html5.js?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/flash.js?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/video.js?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/jQuery.ui-1.10\/h5p-jquery-ui.js?ver=1.10.19",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.InteractiveVideo-1.21\/dist\/h5p-interactive-video.js?ver=1.21.9"
                        ],
                        "styles": [
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/FontAwesome-4.5\/h5p-font-awesome.min.css?ver=4.5.4",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/Drop-1.0\/css\/drop-theme-arrows-bounce.min.css?ver=1.0.2",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.FontIcons-1.0\/styles\/h5p-font-icons.css?ver=1.0.6",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-help-dialog.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-message-dialog.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-progress-circle.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-simple-rounded-button.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-speech-bubble.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-tip.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-slider.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-score-bar.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-progressbar.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-ui.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-icon.css?ver=1.3.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/styles\/question.css?ver=1.4.7",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/styles\/explainer.css?ver=1.4.7",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/styles\/single-choice-set.css?ver=1.11.9",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/css\/summary.css?ver=1.10.8",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNResize-1.2\/H5P.DragNResize.css?ver=1.2.6",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/drag-n-bar.css?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/dialog.css?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/context-menu.css?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/drag-n-bar-form-manager.css?ver=1.5.10",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/styles\/video.css?ver=1.5.12",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/jQuery.ui-1.10\/h5p-jquery-ui.css?ver=1.10.19",
                            "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.InteractiveVideo-1.21\/dist\/h5p-interactive-video.css?ver=1.21.9"
                        ]
                    }
                }
            },
            "user": null,
            "embed_code": "&lt;div class=\"h5p-iframe-wrapper\"&gt;&lt;iframe id=\"h5p-iframe-59\" class=\"h5p-iframe\" data-content-id=\"59\" style=\"height: 1px\" src=\"about:blank\" frameBorder=\"0\" scrolling=\"no\"&gt;&lt;\/iframe&gt;&lt;\/div&gt;"
        },
        "playlist": {
            "id": 1,
            "title": "The Engineering &amp; Design Behind Golf Balls",
            "project_id": 1,
            "order": 0,
            "mongo_projectid": "5eab2f005023ef5f784e5063",
            "created_at": null,
            "updated_at": null,
            "deleted_at": null,
            "elasticsearch": true,
            "is_public": true,
            "project": {
                "id": 1,
                "name": "The Science of Golf",
                "description": "Uncover the science, technology, engineering, and mathematics behind the game of golf.",
                "thumb_url": "\/storage\/uploads\/nN5y8v8zh2ghxrKuHCv5wvJOREFw0Nr27s2DPxWq.png",
                "mongo_userid": "5eaa3ba1777d05258b546922",
                "starter_project": false,
                "created_at": "2020-04-30T20:03:12.000000Z",
                "updated_at": "2020-07-11T12:51:07.000000Z",
                "deleted_at": null,
                "elasticsearch": true,
                "shared": false,
                "is_public": true
            }
        },
        "created_at": null,
        "updated_at": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/activity/{activity}/visibility/{visibility}</code></p>
<!-- END_fd28ca0ce6ea9423c15ba7ff19def822 -->
<!-- START_525329a5d3ad637983f78cadac3a1960 -->
<h2>Retrive H5P embed parameters</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/embed/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/embed/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/embed/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/embed/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/embed/{id}</code></p>
<!-- END_525329a5d3ad637983f78cadac3a1960 -->
<h1>LMS Settings</h1>
<!-- START_2e23d1fbefc018b7f63a6c0e4827c8df -->
<h2>Authenticated user LMS settings</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Display a listing of the LMS settings for authenticated user</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/go/lms-settings/user/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/lms-settings/user/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/go/lms-settings/user/me',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/lms-settings/user/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "settings": [
            {
                "id": 1,
                "lms_url": "https:\/\/moodle39.curriki.org",
                "lms_access_token": "bf06028490c01e1f4538f6206055bc00",
                "site_name": "Moodle Demo",
                "lms_name": "moodle",
                "lms_access_key": "",
                "lms_access_secret": "",
                "description": "Moodle Demo",
                "user_id": 1,
                "created_at": "2020-08-27T18:35:17.000000Z",
                "updated_at": "2020-08-27T18:35:17.000000Z",
                "deleted_at": null,
                "lti_client_id": null
            },
            {
                "id": 1,
                "lms_url": "https:\/\/moodle39.curriki.org",
                "lms_access_token": "bf06028490c01e1f4538f6206055bc00",
                "site_name": "Moodle Demo",
                "lms_name": "moodle",
                "lms_access_key": "",
                "lms_access_secret": "",
                "description": "Moodle Demo",
                "user_id": 1,
                "created_at": "2020-08-27T18:35:17.000000Z",
                "updated_at": "2020-08-27T18:35:17.000000Z",
                "deleted_at": null,
                "lti_client_id": null
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/go/lms-settings/user/me</code></p>
<!-- END_2e23d1fbefc018b7f63a6c0e4827c8df -->
<!-- START_96dd725df77268e19acea6ed61900366 -->
<h2>Projects based on LMS settings LTI client_id</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Display a listing of user Projects that blong it same LMS/LTI settings</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/go/lms/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/go/lms/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/go/lms/projects',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/go/lms/projects'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "error": {
        "lms_url": [
            "The lms url field is required."
        ],
        "lti_client_id": [
            "The lti client id field is required."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/go/lms/projects</code></p>
<!-- END_96dd725df77268e19acea6ed61900366 -->
<h1>Project management</h1>
<p>APIs for managing projects</p>
<!-- START_ae3009c60d0ad2f622cd01ffcf702318 -->
<h2>Display the specified project.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/1/load-shared" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/load-shared"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/1/load-shared',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/load-shared'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "project": {
        "id": 1,
        "created_at": "2020-04-30T20:03:12.000000Z",
        "description": "Uncover the science, technology, engineering, and mathematics behind the game of golf.",
        "name": "The Science of Golf",
        "thumb_url": "\/storage\/uploads\/nN5y8v8zh2ghxrKuHCv5wvJOREFw0Nr27s2DPxWq.png",
        "updated_at": "2020-07-11T12:51:07.000000Z",
        "shared": false,
        "playlists": [
            {
                "id": 1,
                "title": "The Engineering &amp; Design Behind Golf Balls",
                "project_id": 1,
                "updated_at": null,
                "created_at": null,
                "activities": [
                    {
                        "id": 1,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.InteractiveVideo",
                        "thumb_url": null
                    },
                    {
                        "id": 2,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.Flashcards",
                        "thumb_url": null
                    },
                    {
                        "id": 3,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.Accordion",
                        "thumb_url": null
                    },
                    {
                        "id": 4,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.DragQuestion",
                        "thumb_url": null
                    },
                    {
                        "id": 5,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.Timeline",
                        "thumb_url": null
                    },
                    {
                        "id": 6,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.InteractiveVideo",
                        "thumb_url": null
                    },
                    {
                        "id": 7,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.Flashcards",
                        "thumb_url": null
                    },
                    {
                        "id": 17774,
                        "type": "h5p",
                        "title": "abc",
                        "library_name": "H5P.AudioRecorder",
                        "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png"
                    },
                    {
                        "id": 17776,
                        "type": "h5p",
                        "title": "abc",
                        "library_name": "H5P.AudioRecorder",
                        "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png"
                    }
                ]
            },
            {
                "id": 2,
                "title": "Topic 2",
                "project_id": 1,
                "updated_at": null,
                "created_at": null,
                "activities": [
                    {
                        "id": 8,
                        "type": "h5p",
                        "title": "",
                        "library_name": "H5P.DragQuestion",
                        "thumb_url": null
                    }
                ]
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{project}/load-shared</code></p>
<!-- END_ae3009c60d0ad2f622cd01ffcf702318 -->
<!-- START_57b4a66cc415c7809e03a83e2dfa7039 -->
<h2>Upload thumb image for project</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/upload-thumb" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/upload-thumb"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/upload-thumb',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/upload-thumb'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/upload-thumb</code></p>
<!-- END_57b4a66cc415c7809e03a83e2dfa7039 -->
<!-- START_e5cecabb4183ab5664a24c70ec39e6db -->
<h2>Share the specified project.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/share" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/share',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/share'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/share</code></p>
<!-- END_e5cecabb4183ab5664a24c70ec39e6db -->
<!-- START_03be4c7ca97b07327faa55daa3813b91 -->
<h2>api/v1/projects/{project}/clone</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 38,
            "name": "Raul Deju Entrepreneur Course",
            "description": "Raul Deju, a renewed entrepreneur, has created a basic entrepreneurship course and is passionate about getting it in the hands of learners. There are 8 modules that constitute the core of the classes. Raul has been putting the entire curriculum for Entrepreneurship on a video modality for use by faculty as a support or for use by students in a self-standing model.",
            "thumb_url": "\/storage\/uploads_tmp\/zADzCKxLUSRNcA79Pr6nRvSJECYZzX7d2BQfoTc9.png",
            "shared": false,
            "starter_project": false,
            "is_public": true,
            "created_at": "2020-08-17T18:10:43.000000Z",
            "updated_at": "2020-08-17T18:11:34.000000Z"
        },
        {
            "id": 38,
            "name": "Raul Deju Entrepreneur Course",
            "description": "Raul Deju, a renewed entrepreneur, has created a basic entrepreneurship course and is passionate about getting it in the hands of learners. There are 8 modules that constitute the core of the classes. Raul has been putting the entire curriculum for Entrepreneurship on a video modality for use by faculty as a support or for use by students in a self-standing model.",
            "thumb_url": "\/storage\/uploads_tmp\/zADzCKxLUSRNcA79Pr6nRvSJECYZzX7d2BQfoTc9.png",
            "shared": false,
            "starter_project": false,
            "is_public": true,
            "created_at": "2020-08-17T18:10:43.000000Z",
            "updated_at": "2020-08-17T18:11:34.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/clone</code></p>
<!-- END_03be4c7ca97b07327faa55daa3813b91 -->
<!-- START_a52552fb436b8c9f0b70cd65be17699e -->
<h2>Remove share specified project.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/remove-share" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/remove-share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/remove-share',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/remove-share'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/remove-share</code></p>
<!-- END_a52552fb436b8c9f0b70cd65be17699e -->
<!-- START_fec72aefe714410a7eb64d4c8d038fe9 -->
<h2>Display a listing of the recent projects.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/recent" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/recent"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/recent',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/recent'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/recent</code></p>
<!-- END_fec72aefe714410a7eb64d4c8d038fe9 -->
<!-- START_a858b706af67460bc8eb2d317433d351 -->
<h2>Display a listing of the default projects.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/default" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/default"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/default',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/default'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/default</code></p>
<!-- END_a858b706af67460bc8eb2d317433d351 -->
<!-- START_190e0c258c456cafd32006747d472c60 -->
<h2>Display a listing of the project with detail.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/detail',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/detail'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/detail</code></p>
<!-- END_190e0c258c456cafd32006747d472c60 -->
<!-- START_d4bb0000cd4525b356d3f4e604741ee1 -->
<h2>Display a listing of the project.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects</code></p>
<!-- END_d4bb0000cd4525b356d3f4e604741ee1 -->
<!-- START_e832cdeb3d8617c57febfca7405a7263 -->
<h2>Store a newly created project in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects</code></p>
<!-- END_e832cdeb3d8617c57febfca7405a7263 -->
<!-- START_75829dedef8e9515c7f6ed1540f9b2db -->
<h2>Display the specified project.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/1?projectId=blanditiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1"
);

let params = {
    "projectId": "blanditiis",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'projectId'=&gt; 'blanditiis',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1'
params = {
  'projectId': 'blanditiis',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{project}</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>projectId</code></td>
<td>required</td>
<td>This is id of a project.</td>
</tr>
</tbody>
</table>
<!-- END_75829dedef8e9515c7f6ed1540f9b2db -->
<!-- START_de3e82447d2000a0d706c9d01fad13cb -->
<h2>Update the specified project in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/projects/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/projects/{project}</code></p>
<p><code>PATCH api/v1/projects/{project}</code></p>
<!-- END_de3e82447d2000a0d706c9d01fad13cb -->
<!-- START_e4b54f3a75c552f90d5d695795bc8e9f -->
<h2>Remove the specified project from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/projects/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/projects/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/projects/{project}</code></p>
<!-- END_e4b54f3a75c552f90d5d695795bc8e9f -->
<h1>Search API</h1>
<p>APIs for search</p>
<!-- START_0b53c42f007c5a3ca1fb91b518ef98c3 -->
<h2>Deep Linking Search</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Search projects, playlists and activities for deep linking</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/search?query=test&amp;sort=created_at&amp;order=desc&amp;from=0&amp;size=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/search"
);

let params = {
    "query": "test",
    "sort": "created_at",
    "order": "desc",
    "from": "0",
    "size": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'query'=&gt; 'test',
            'sort'=&gt; 'created_at',
            'order'=&gt; 'desc',
            'from'=&gt; '0',
            'size'=&gt; '10',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/search'
params = {
  'query': 'test',
  'sort': 'created_at',
  'order': 'desc',
  'from': '0',
  'size': '10',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "projects": {
        "457": {
            "id": 457,
            "name": "Text Structure Lesson 2 Problem and Solution",
            "description": "Learning Objective\nThe learner will define and describe the main characteristics...",
            "thumb_url": "\/storage\/uploads\/3zjZuLoQrRk0MZ5wP7UPyOut5zUybf3tW3a4Q2M1.png",
            "mongo_userid": "5ef5300e41668b53ea5ed1b3",
            "starter_project": false,
            "created_at": "2020-07-17T17:49:01.000000Z",
            "updated_at": "2020-08-06T13:28:07.000000Z",
            "deleted_at": null,
            "playlists": {
                "225": {
                    "id": 225,
                    "title": "Solving Ratio and Rate Problems",
                    "project_id": 64,
                    "order": null,
                    "mongo_projectid": "5f3ae92a924a1d5ddf44dd80",
                    "created_at": null,
                    "updated_at": null,
                    "deleted_at": null,
                    "activities": {
                        "993": {
                            "id": 993,
                            "playlist_id": 225,
                            "title": "",
                            "type": "h5p",
                            "content": "",
                            "h5p_content_id": 17474,
                            "thumb_url": "\/storage\/uploads\/5f3aedeba24fb.jpeg",
                            "subject_id": null,
                            "education_level_id": null,
                            "shared": false,
                            "order": 11,
                            "mongo_playlistid": "5f3aeccd924a1d5ddf44ddd0",
                            "created_at": null,
                            "updated_at": null,
                            "deleted_at": null
                        }
                    }
                }
            }
        }
    }
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "query": [
            "The query field is required."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/search</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>query</code></td>
<td>required</td>
<td>Query to search.</td>
</tr>
<tr>
<td><code>sort</code></td>
<td>optional</td>
<td>Field to sort by.</td>
</tr>
<tr>
<td><code>order</code></td>
<td>optional</td>
<td>Order to sort by.</td>
</tr>
<tr>
<td><code>from</code></td>
<td>optional</td>
<td>Index where the pagination start from.</td>
</tr>
<tr>
<td><code>size</code></td>
<td>optional</td>
<td>Number of records to return.</td>
</tr>
</tbody>
</table>
<!-- END_0b53c42f007c5a3ca1fb91b518ef98c3 -->
<!-- START_4b2e2ae3f1de524eb15d380dcb1e3edb -->
<h2>Advance search</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Advance search for projects, playlists and activities</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/search/advanced?query=test&amp;negativeQuery=badword&amp;userIds=%5B1%5D&amp;model=activities&amp;sort=created_at&amp;order=desc&amp;from=0&amp;size=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/search/advanced"
);

let params = {
    "query": "test",
    "negativeQuery": "badword",
    "userIds": "[1]",
    "model": "activities",
    "sort": "created_at",
    "order": "desc",
    "from": "0",
    "size": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/search/advanced',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'query'=&gt; 'test',
            'negativeQuery'=&gt; 'badword',
            'userIds'=&gt; '[1]',
            'model'=&gt; 'activities',
            'sort'=&gt; 'created_at',
            'order'=&gt; 'desc',
            'from'=&gt; '0',
            'size'=&gt; '10',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/search/advanced'
params = {
  'query': 'test',
  'negativeQuery': 'badword',
  'userIds': '[1]',
  'model': 'activities',
  'sort': 'created_at',
  'order': 'desc',
  'from': '0',
  'size': '10',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 457,
            "thumb_url": "\/storage\/uploads\/3zjZuLoQrRk0MZ5wP7UPyOut5zUybf3tW3a4Q2M1.png",
            "title": "Text Structure Lesson 2 Problem and Solution",
            "description": "Learning Objective\nThe learner will define and describe the main characteristics...",
            "model": "Project",
            "user": {
                "id": 1,
                "name": "localuser",
                "email": "localuser@local.com",
                "email_verified_at": null,
                "created_at": "2020-08-22T12:13:52.000000Z",
                "updated_at": "2020-08-22T12:13:52.000000Z",
                "first_name": "test",
                "last_name": "test",
                "organization_name": "organization_name",
                "job_title": "job_title",
                "address": null,
                "phone_number": null,
                "organization_type": null,
                "website": null,
                "deleted_at": null,
                "role": null,
                "gapi_access_token": null,
                "pivot": {
                    "project_id": 457,
                    "user_id": 1,
                    "role": "teacher",
                    "created_at": "2020-08-25T09:35:35.000000Z",
                    "updated_at": "2020-08-25T09:35:35.000000Z"
                }
            }
        },
        {
            "id": 1102,
            "title": "All About That Text",
            "model": "Playlist",
            "user": null
        }
    ],
    "meta": {
        "projects": 7,
        "playlists": 3,
        "activities": 2,
        "total": 12
    }
}</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": {
        "userIds": [
            "The user ids must be an array."
        ]
    }
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "title": "",
            "model": "Activity",
            "user": null
        },
        {
            "id": 1,
            "title": "",
            "model": "Activity",
            "user": null
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/search/advanced</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>query</code></td>
<td>required</td>
<td>Query to search.</td>
</tr>
<tr>
<td><code>negativeQuery</code></td>
<td>optional</td>
<td>Terms that should not exist.</td>
</tr>
<tr>
<td><code>userIds</code></td>
<td>optional</td>
<td>Array of user ids to match.</td>
</tr>
<tr>
<td><code>model</code></td>
<td>optional</td>
<td>Index to filter by.</td>
</tr>
<tr>
<td><code>sort</code></td>
<td>optional</td>
<td>Field to sort by.</td>
</tr>
<tr>
<td><code>order</code></td>
<td>optional</td>
<td>Order to sort by.</td>
</tr>
<tr>
<td><code>from</code></td>
<td>optional</td>
<td>Index where the pagination start from.</td>
</tr>
<tr>
<td><code>size</code></td>
<td>optional</td>
<td>Number of records to return.</td>
</tr>
</tbody>
</table>
<!-- END_4b2e2ae3f1de524eb15d380dcb1e3edb -->
<h1>User management</h1>
<p>APIs for managing users</p>
<!-- START_ae759839bebb25703d47273f4486ce12 -->
<h2>Subscribe.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/subscribe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/subscribe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/subscribe',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/subscribe'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/subscribe</code></p>
<!-- END_ae759839bebb25703d47273f4486ce12 -->
<!-- START_dfb8fbb6facf7c68af221b2363bceb9e -->
<h2>Display the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users/me',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users/me</code></p>
<!-- END_dfb8fbb6facf7c68af221b2363bceb9e -->
<!-- START_e1acbbf1139449674cd6b37da0a82ce0 -->
<h2>Update password of the specified user in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/users/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/users/update-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/update-password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/users/update-password</code></p>
<!-- END_e1acbbf1139449674cd6b37da0a82ce0 -->
<!-- START_1aff981da377ba9a1bbc56ff8efaec0d -->
<h2>Display a listing of the user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users</code></p>
<!-- END_1aff981da377ba9a1bbc56ff8efaec0d -->
<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
<h2>Store a newly created user in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/users</code></p>
<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->
<!-- START_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
<h2>Display the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users/{user}</code></p>
<!-- END_cedc85e856362e0e3b46f5dcd9f8f5d0 -->
<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
<h2>Update the specified user in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/users/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/users/{user}</code></p>
<p><code>PATCH api/v1/users/{user}</code></p>
<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->
<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
<h2>Remove the specified user from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/users/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/users/{user}</code></p>
<!-- END_22354fc95c42d81a744eece68f5b9b9a -->
<h1>general</h1>
<!-- START_cd4a874127cd23508641c63b640ee838 -->
<h2>doc.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/doc.json',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/doc.json'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variables": [],
    "info": {
        "name": "Curriki API",
        "_postman_id": "ba0ff912-b789-43d8-8198-c9e6d2f93f17",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "Authentication",
            "description": "\nAPIs for Authentication",
            "item": [
                {
                    "name": "Register",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/register",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"first_name\": \"necessitatibus\",\n    \"last_name\": \"odit\",\n    \"email\": \"adipisci\",\n    \"password\": \"eveniet\",\n    \"organization_name\": \"distinctio\",\n    \"job_title\": \"deserunt\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Login",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"email\": \"voluptas\",\n    \"password\": \"ab\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Login with Google",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/login\/google",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Forgot Password Email\nSend a reset link to the given user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/forgot-password",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"email\": \"et\"\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Verify Email Address\nMark the authenticated user's email address as verified.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/verify-email",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Logout",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/logout",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "CurrikiGo",
            "description": "",
            "item": [
                {
                    "name": "Publish a Playlist to Canvas",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/canvas\/projects\/:project\/playlists\/:playlist\/publish",
                            "query": [],
                            "variable": [
                                {
                                    "id": "project",
                                    "key": "project",
                                    "value": "magni",
                                    "description": "The ID of the project"
                                },
                                {
                                    "id": "playlist",
                                    "key": "playlist",
                                    "value": "totam",
                                    "description": "The ID of the playlist."
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"setting_id\": 17,\n    \"counter\": 15\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Fetch a course from Canvas",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/canvas\/projects\/:project\/fetch",
                            "query": [],
                            "variable": [
                                {
                                    "id": "project",
                                    "key": "project",
                                    "value": "et",
                                    "description": "The ID of the project."
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"setting_id\": 18\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Publish a Playlist to Moodle",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/moodle\/projects\/:project\/playlists\/:playlist\/publish",
                            "query": [],
                            "variable": [
                                {
                                    "id": "project",
                                    "key": "project",
                                    "value": "error",
                                    "description": "The ID of the project"
                                },
                                {
                                    "id": "playlist",
                                    "key": "playlist",
                                    "value": "quaerat",
                                    "description": "The ID of the playlist."
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"setting_id\": 19,\n    \"counter\": 14\n}"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Fetch a course from Moodle",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/moodle\/projects\/:project\/fetch",
                            "query": [],
                            "variable": [
                                {
                                    "id": "project",
                                    "key": "project",
                                    "value": "id",
                                    "description": "The ID of the project."
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"setting_id\": 19\n}"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "Google Classroom",
            "description": "",
            "item": [
                {
                    "name": "Save Access Token",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/google-classroom\/access-token",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"access_token\": \"sapiente\"\n}"
                        },
                        "description": "Save GAPI access token in the database.",
                        "response": []
                    }
                },
                {
                    "name": "Get Courses",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/google-classroom\/courses",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get all existing Google Classroom Courses",
                        "response": []
                    }
                },
                {
                    "name": "Copy project to Google Classroom",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/google-classroom\/projects\/:project\/copy",
                            "query": [],
                            "variable": [
                                {
                                    "id": "project",
                                    "key": "project",
                                    "value": "9",
                                    "description": "The ID of the project."
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"course_id\": \"123\"\n}"
                        },
                        "description": "Copy whole project to google classroom either as a new course\nor into an existing course.",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "H5P",
            "description": "",
            "item": [
                {
                    "name": "List of H5Ps",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Display a listing of the H5Ps",
                        "response": []
                    }
                },
                {
                    "name": "H5P create settings",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store H5P",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrive H5P based on id to display",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/{}",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrieve H5P based on id",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/{}\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update H5P based on id",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/{}",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/{}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/{}",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "H5P create settings",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/settings",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrive H5P based on Activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/activity\/:activity",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrive H5P based on Activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/activity\/:activity\/visibility\/:visibility",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrive H5P embed parameters",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/embed\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "LMS Settings",
            "description": "",
            "item": [
                {
                    "name": "Authenticated user LMS settings",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/lms-settings\/user\/me",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Display a listing of the LMS settings for authenticated user",
                        "response": []
                    }
                },
                {
                    "name": "Projects based on LMS settings LTI client_id",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/go\/lms\/projects",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Display a listing of user Projects that blong it same LMS\/LTI settings",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "Project management",
            "description": "\nAPIs for managing projects",
            "item": [
                {
                    "name": "Display the specified project.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/load-shared",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Upload thumb image for project",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/upload-thumb",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Share the specified project.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/share",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/projects\/{project}\/clone",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/clone",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove share specified project.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/remove-share",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the recent projects.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/recent",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the default projects.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/default",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the project with detail.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/detail",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the project.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created project in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified project.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project",
                            "query": [
                                {
                                    "key": "projectId",
                                    "value": "dolor",
                                    "description": "This is id of a project.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified project in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified project from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "Search API",
            "description": "\nAPIs for search",
            "item": [
                {
                    "name": "Deep Linking Search",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/search",
                            "query": [
                                {
                                    "key": "query",
                                    "value": "test",
                                    "description": "Query to search.",
                                    "disabled": false
                                },
                                {
                                    "key": "sort",
                                    "value": "created_at",
                                    "description": "Field to sort by.",
                                    "disabled": false
                                },
                                {
                                    "key": "order",
                                    "value": "desc",
                                    "description": "Order to sort by.",
                                    "disabled": false
                                },
                                {
                                    "key": "from",
                                    "value": "0",
                                    "description": "Index where the pagination start from.",
                                    "disabled": true
                                },
                                {
                                    "key": "size",
                                    "value": "10",
                                    "description": "Number of records to return.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Search projects, playlists and activities for deep linking",
                        "response": []
                    }
                },
                {
                    "name": "Advance search",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/search\/advanced",
                            "query": [
                                {
                                    "key": "query",
                                    "value": "test",
                                    "description": "Query to search.",
                                    "disabled": false
                                },
                                {
                                    "key": "negativeQuery",
                                    "value": "badword",
                                    "description": "Terms that should not exist.",
                                    "disabled": false
                                },
                                {
                                    "key": "userIds",
                                    "value": "%5B1%5D",
                                    "description": "Array of user ids to match.",
                                    "disabled": false
                                },
                                {
                                    "key": "model",
                                    "value": "activities",
                                    "description": "Index to filter by.",
                                    "disabled": false
                                },
                                {
                                    "key": "sort",
                                    "value": "created_at",
                                    "description": "Field to sort by.",
                                    "disabled": false
                                },
                                {
                                    "key": "order",
                                    "value": "desc",
                                    "description": "Order to sort by.",
                                    "disabled": false
                                },
                                {
                                    "key": "from",
                                    "value": "0",
                                    "description": "Index where the pagination start from.",
                                    "disabled": true
                                },
                                {
                                    "key": "size",
                                    "value": "10",
                                    "description": "Number of records to return.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Advance search for projects, playlists and activities",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "User management",
            "description": "\nAPIs for managing users",
            "item": [
                {
                    "name": "Subscribe.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/subscribe",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/me",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update password of the specified user in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/update-password",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created user in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/:user",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified user in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/:user",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified user from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/:user",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "doc.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "doc.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/create",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/create",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/{h5p}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/:h5p",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/{h5p}\/edit",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/:h5p\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/{h5p}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/:h5p",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/{h5p}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/:h5p",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library\/show\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library\/show\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library\/store",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library\/store",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library\/destroy",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library\/destroy",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library\/restrict",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library\/restrict",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "library\/clear",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "library\/clear",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/embed\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/embed\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "h5p\/content-params\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "h5p\/content-params\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Approve the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Deny the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/token",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the authorized tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get a fresh transient token cookie for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/token\/refresh",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the clients for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a new client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the available scopes for the application.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/scopes",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the personal access tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Create a new personal access token for the user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "oauth\/personal-access-tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Reset the given user's password.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/reset-password",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Resend the email verification notification.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/verify-email\/resend",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified playlist.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/playlists\/:playlist\/load-shared",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/activities\/{activity}\/log-view",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/log-view",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/playlists\/{playlist}\/log-view",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/playlists\/:playlist\/log-view",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/projects\/{project}\/log-view",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/log-view",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/users\/me\/redeem\/{offerName}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/me\/redeem\/:offerName",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Reorder playlists in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists\/reorder",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/projects\/{project}\/playlists\/{playlist}\/clone",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists\/:playlist\/clone",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the playlist.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created playlist in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified playlist.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists\/:playlist",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified playlist in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists\/:playlist",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified playlist from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/projects\/:project\/playlists\/:playlist",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/playlists\/{playlist}\/activities\/{activity}\/clone",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/playlists\/:playlist\/activities\/:activity\/clone",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Upload thumb image for activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/upload-thumb",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Share the specified activity.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/share",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove share specified activity.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/remove-share",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified activity in detail.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/detail",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Activity H5P",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/h5p",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get H5P Resource Settings for Activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/h5p-resource-settings",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get H5P Resource Settings for Activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/h5p-resource-settings-open",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the activity.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created activity in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified activity.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified activity in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified activity from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types\/:activityType\/items",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types\/:activity_type",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types\/:activity_type",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-types\/:activity_type",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display a listing of the resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-items",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a newly created resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-items",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-items\/:activity_item",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-items\/:activity_item",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activity-items\/:activity_item",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/users\/{user}\/metrics",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/:user\/metrics",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/users\/{user}\/membership",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/users\/:user\/membership",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/libraries",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/libraries",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/single-libraries",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/single-libraries",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/content-type-cache",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/content-type-cache",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/library-install",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/library-install",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/library-upload",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/library-upload",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/filter",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/filter",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/finish",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/finish",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/content-user-data",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/content-user-data",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get H5P Resource Settings for Activity",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/activities\/:activity\/h5p-resource-settings-shared",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/ajax\/files",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/ajax\/files",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/h5p\/export\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/h5p\/export\/:id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the lti playlist.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/playlists\/:playlist\/lti",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display error",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/error",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/users",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/users",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/users",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/users",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/users\/{user}\/edit",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/users\/:user\/edit",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/users\/{user}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/users\/:user",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/users\/{user}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/users\/:user",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/projects",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/projects",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/v1\/admin\/projects\/indexes\/{id}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "api\/v1\/admin\/projects\/indexes\/:id",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Invoke the controller method.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost:8000",
                            "path": "\/",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET doc.json</code></p>
<!-- END_cd4a874127cd23508641c63b640ee838 -->
<!-- START_f510e1eb805892f65cfdde1bdd2570d0 -->
<h2>h5p</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p</code></p>
<!-- END_f510e1eb805892f65cfdde1bdd2570d0 -->
<!-- START_7d22820c0fe2b0b9fa52ed10738f004d -->
<h2>h5p/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p/create</code></p>
<!-- END_7d22820c0fe2b0b9fa52ed10738f004d -->
<!-- START_639198a1902fe338510b7132e5cc8883 -->
<h2>h5p</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/h5p" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/h5p',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST h5p</code></p>
<!-- END_639198a1902fe338510b7132e5cc8883 -->
<!-- START_6b43c6f62b1184827c48e3b0cb649fde -->
<h2>h5p/{h5p}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p/{h5p}</code></p>
<!-- END_6b43c6f62b1184827c48e3b0cb649fde -->
<!-- START_ce90dcdac1a20635648c0539951b20cb -->
<h2>h5p/{h5p}/edit</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p/{h5p}/edit</code></p>
<!-- END_ce90dcdac1a20635648c0539951b20cb -->
<!-- START_a936c27d351f8b5ef5c21552f4d9e626 -->
<h2>h5p/{h5p}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/h5p/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/h5p/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT h5p/{h5p}</code></p>
<p><code>PATCH h5p/{h5p}</code></p>
<!-- END_a936c27d351f8b5ef5c21552f4d9e626 -->
<!-- START_0da4104a8b7a2dc1b2b9746c016df781 -->
<h2>h5p/{h5p}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/h5p/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/h5p/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE h5p/{h5p}</code></p>
<!-- END_0da4104a8b7a2dc1b2b9746c016df781 -->
<!-- START_cf03da7d624d59031bb2af50a35e24dc -->
<h2>library</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/library" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/library',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET library</code></p>
<!-- END_cf03da7d624d59031bb2af50a35e24dc -->
<!-- START_be7f9dc51c79739a0f4b09db197046e6 -->
<h2>library/show/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/library/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library/show/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/library/show/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library/show/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET library/show/{id}</code></p>
<!-- END_be7f9dc51c79739a0f4b09db197046e6 -->
<!-- START_aad132870660623943d02190219b50e7 -->
<h2>library/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/library/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/library/store',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library/store'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST library/store</code></p>
<!-- END_aad132870660623943d02190219b50e7 -->
<!-- START_d78868c2dbeb02a0842a5b08df469f4a -->
<h2>library/destroy</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/library/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/library/destroy',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library/destroy'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE library/destroy</code></p>
<!-- END_d78868c2dbeb02a0842a5b08df469f4a -->
<!-- START_57169872d02ad4eff559bad219bf8f70 -->
<h2>library/restrict</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/library/restrict" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library/restrict"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/library/restrict',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library/restrict'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET library/restrict</code></p>
<!-- END_57169872d02ad4eff559bad219bf8f70 -->
<!-- START_81059c63b26ab95479204413dc81cd7e -->
<h2>library/clear</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/library/clear" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/library/clear"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/library/clear',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/library/clear'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST library/clear</code></p>
<!-- END_81059c63b26ab95479204413dc81cd7e -->
<!-- START_51730eb6febe54c094149d7d45ec3d67 -->
<h2>h5p/embed/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p/embed/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/embed/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p/embed/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/embed/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p/embed/{id}</code></p>
<!-- END_51730eb6febe54c094149d7d45ec3d67 -->
<!-- START_ad74731e05037df4c9d4638abd4eebc5 -->
<h2>h5p/content-params/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/h5p/content-params/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/h5p/content-params/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/h5p/content-params/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/h5p/content-params/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET h5p/content-params/{id}</code></p>
<!-- END_ad74731e05037df4c9d4638abd4eebc5 -->
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/oauth/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/authorize</code></p>
<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->
<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
<h2>Approve the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/oauth/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (419):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "CSRF token mismatch."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/authorize</code></p>
<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->
<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
<h2>Deny the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/oauth/authorize',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/authorize</code></p>
<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->
<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/oauth/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/token'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "unsupported_grant_type",
    "error_description": "The authorization grant type is not supported by the authorization server.",
    "hint": "Check that all required parameters have been provided",
    "message": "The authorization grant type is not supported by the authorization server."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token</code></p>
<!-- END_a09d20357336aa979ecd8e3972ac9168 -->
<!-- START_d6a56149547e03307199e39e03e12d1c -->
<h2>Get all of the authorized tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/oauth/tokens',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/tokens</code></p>
<!-- END_d6a56149547e03307199e39e03e12d1c -->
<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/oauth/tokens/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/tokens/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/tokens/{token_id}</code></p>
<!-- END_a9a802c25737cca5324125e5f60b72a5 -->
<!-- START_abe905e69f5d002aa7d26f433676d623 -->
<h2>Get a fresh transient token cookie for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/oauth/token/refresh',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/token/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (419):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "CSRF token mismatch."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token/refresh</code></p>
<!-- END_abe905e69f5d002aa7d26f433676d623 -->
<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
<h2>Get all of the clients for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/oauth/clients',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/clients'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/clients</code></p>
<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->
<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
<h2>Store a new client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/oauth/clients',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/clients'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (419):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "CSRF token mismatch."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/clients</code></p>
<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->
<!-- START_784aec390a455073fc7464335c1defa1 -->
<h2>Update the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/oauth/clients/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/clients/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT oauth/clients/{client_id}</code></p>
<!-- END_784aec390a455073fc7464335c1defa1 -->
<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
<h2>Delete the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/oauth/clients/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/clients/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/clients/{client_id}</code></p>
<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->
<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
<h2>Get all of the available scopes for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/oauth/scopes',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/scopes'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/scopes</code></p>
<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->
<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<h2>Get all of the personal access tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/oauth/personal-access-tokens',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/personal-access-tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/personal-access-tokens</code></p>
<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
<h2>Create a new personal access token for the user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/oauth/personal-access-tokens',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/personal-access-tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (419):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "CSRF token mismatch."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/personal-access-tokens</code></p>
<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->
<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/oauth/personal-access-tokens/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/oauth/personal-access-tokens/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/personal-access-tokens/{token_id}</code></p>
<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->
<!-- START_6d3061d375666b8cf6babe163b36f250 -->
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/reset-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/reset-password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "token": [
            "The token field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/reset-password</code></p>
<!-- END_6d3061d375666b8cf6babe163b36f250 -->
<!-- START_7de63f50d103dc0194c570c267800180 -->
<h2>Resend the email verification notification.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/verify-email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/verify-email/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/verify-email/resend',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/verify-email/resend'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/verify-email/resend</code></p>
<!-- END_7de63f50d103dc0194c570c267800180 -->
<!-- START_8986e223ff0f915079f98a531d2d8288 -->
<h2>Display the specified playlist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/playlists/1/load-shared" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/playlists/1/load-shared"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/playlists/1/load-shared',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/playlists/1/load-shared'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "No shareable Project found."
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/playlists/{playlist}/load-shared</code></p>
<!-- END_8986e223ff0f915079f98a531d2d8288 -->
<!-- START_2d90402a7e9854f36e2fa68ec17a87fd -->
<h2>api/v1/activities/{activity}/log-view</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/log-view" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/log-view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/log-view',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/log-view'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "OK"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/log-view</code></p>
<!-- END_2d90402a7e9854f36e2fa68ec17a87fd -->
<!-- START_7d7e81b6a9a2bd1a8a71095ff9310e5e -->
<h2>api/v1/playlists/{playlist}/log-view</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/playlists/1/log-view" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/playlists/1/log-view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/playlists/1/log-view',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/playlists/1/log-view'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "OK"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/playlists/{playlist}/log-view</code></p>
<!-- END_7d7e81b6a9a2bd1a8a71095ff9310e5e -->
<!-- START_6bf4f6599a5abc032da04d2a50924084 -->
<h2>api/v1/projects/{project}/log-view</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/1/log-view" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/log-view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/1/log-view',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/log-view'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "OK"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{project}/log-view</code></p>
<!-- END_6bf4f6599a5abc032da04d2a50924084 -->
<!-- START_61783ff400b04030a40840e32a376ec7 -->
<h2>api/v1/users/me/redeem/{offerName}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users/me/redeem/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/me/redeem/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users/me/redeem/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/me/redeem/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users/me/redeem/{offerName}</code></p>
<!-- END_61783ff400b04030a40840e32a376ec7 -->
<!-- START_5738f6cd77e8d8f2311a0e0faf8e5b5a -->
<h2>Reorder playlists in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/playlists/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/playlists/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/playlists/reorder</code></p>
<!-- END_5738f6cd77e8d8f2311a0e0faf8e5b5a -->
<!-- START_68b26065a5d9e70c2b7f4537250c6db9 -->
<h2>api/v1/projects/{project}/playlists/{playlist}/clone</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/playlists/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/playlists/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 38,
            "name": "Raul Deju Entrepreneur Course",
            "description": "Raul Deju, a renewed entrepreneur, has created a basic entrepreneurship course and is passionate about getting it in the hands of learners. There are 8 modules that constitute the core of the classes. Raul has been putting the entire curriculum for Entrepreneurship on a video modality for use by faculty as a support or for use by students in a self-standing model.",
            "thumb_url": "\/storage\/uploads_tmp\/zADzCKxLUSRNcA79Pr6nRvSJECYZzX7d2BQfoTc9.png",
            "shared": false,
            "starter_project": false,
            "is_public": true,
            "created_at": "2020-08-17T18:10:43.000000Z",
            "updated_at": "2020-08-17T18:11:34.000000Z"
        },
        {
            "id": 38,
            "name": "Raul Deju Entrepreneur Course",
            "description": "Raul Deju, a renewed entrepreneur, has created a basic entrepreneurship course and is passionate about getting it in the hands of learners. There are 8 modules that constitute the core of the classes. Raul has been putting the entire curriculum for Entrepreneurship on a video modality for use by faculty as a support or for use by students in a self-standing model.",
            "thumb_url": "\/storage\/uploads_tmp\/zADzCKxLUSRNcA79Pr6nRvSJECYZzX7d2BQfoTc9.png",
            "shared": false,
            "starter_project": false,
            "is_public": true,
            "created_at": "2020-08-17T18:10:43.000000Z",
            "updated_at": "2020-08-17T18:11:34.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/playlists/{playlist}/clone</code></p>
<!-- END_68b26065a5d9e70c2b7f4537250c6db9 -->
<!-- START_04d0433e8d1e16965dac2606ac067416 -->
<h2>Display a listing of the playlist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/1/playlists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/1/playlists',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{project}/playlists</code></p>
<!-- END_04d0433e8d1e16965dac2606ac067416 -->
<!-- START_a93f82d5d38155b5faa5021da933fa12 -->
<h2>Store a newly created playlist in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/projects/1/playlists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/projects/1/playlists',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/projects/{project}/playlists</code></p>
<!-- END_a93f82d5d38155b5faa5021da933fa12 -->
<!-- START_39d40f33110103c75e8260da8c0e28c7 -->
<h2>Display the specified playlist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/projects/1/playlists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/projects/1/playlists/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/projects/{project}/playlists/{playlist}</code></p>
<!-- END_39d40f33110103c75e8260da8c0e28c7 -->
<!-- START_4bc7fcc89f8b0e68a8fb0628eaf1a323 -->
<h2>Update the specified playlist in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/projects/1/playlists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/projects/1/playlists/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/projects/{project}/playlists/{playlist}</code></p>
<p><code>PATCH api/v1/projects/{project}/playlists/{playlist}</code></p>
<!-- END_4bc7fcc89f8b0e68a8fb0628eaf1a323 -->
<!-- START_feb1f1225dc03ec1052829032b6fc7b5 -->
<h2>Remove the specified playlist from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/projects/1/playlists/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/projects/1/playlists/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/projects/1/playlists/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/projects/1/playlists/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/projects/{project}/playlists/{playlist}</code></p>
<!-- END_feb1f1225dc03ec1052829032b6fc7b5 -->
<!-- START_8674b95ae4d8247bdfeba9f0a39caeb7 -->
<h2>api/v1/playlists/{playlist}/activities/{activity}/clone</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/playlists/1/activities/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/playlists/1/activities/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/playlists/1/activities/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/playlists/1/activities/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2684,
            "title": "math",
            "order": null,
            "is_public": true,
            "project_id": 1238,
            "project": {
                "id": 1238,
                "name": "Exploring Our National Parks",
                "description": "Explore America’s national parks. Discover our most treasured places. From science to the arts, service learning to teacher training, America’s national parks teach invaluable lessons about our planet, our history, and ourselves. These incredible places, and all that they offer beyond the boundaries of the national parks, are the catalysts for inspiring a new generation of park enthusiasts. The National Park Foundation is dedicated to utilizing these powerful learning environments that can provide in-depth, real-world learning experiences, to nurture a deep connection between the next generation and America's national parks.",
                "thumb_url": "\/storage\/uploads\/5f1868cc08781.png",
                "shared": false,
                "starter_project": true,
                "users": [],
                "is_public": true,
                "created_at": "2020-07-22T16:26:52.000000Z",
                "updated_at": "2020-07-22T16:26:52.000000Z"
            },
            "activities": [],
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2684,
            "title": "math",
            "order": null,
            "is_public": true,
            "project_id": 1238,
            "project": {
                "id": 1238,
                "name": "Exploring Our National Parks",
                "description": "Explore America’s national parks. Discover our most treasured places. From science to the arts, service learning to teacher training, America’s national parks teach invaluable lessons about our planet, our history, and ourselves. These incredible places, and all that they offer beyond the boundaries of the national parks, are the catalysts for inspiring a new generation of park enthusiasts. The National Park Foundation is dedicated to utilizing these powerful learning environments that can provide in-depth, real-world learning experiences, to nurture a deep connection between the next generation and America's national parks.",
                "thumb_url": "\/storage\/uploads\/5f1868cc08781.png",
                "shared": false,
                "starter_project": true,
                "users": [],
                "is_public": true,
                "created_at": "2020-07-22T16:26:52.000000Z",
                "updated_at": "2020-07-22T16:26:52.000000Z"
            },
            "activities": [],
            "created_at": null,
            "updated_at": null
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/playlists/{playlist}/activities/{activity}/clone</code></p>
<!-- END_8674b95ae4d8247bdfeba9f0a39caeb7 -->
<!-- START_ff121af8a5ea1d35a56c9c7d4bffa859 -->
<h2>Upload thumb image for activity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/activities/upload-thumb" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/upload-thumb"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/activities/upload-thumb',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/upload-thumb'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/activities/upload-thumb</code></p>
<!-- END_ff121af8a5ea1d35a56c9c7d4bffa859 -->
<!-- START_64bed117d0588075511b48ece185b494 -->
<h2>Share the specified activity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/share" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/share',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/share'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/share</code></p>
<!-- END_64bed117d0588075511b48ece185b494 -->
<!-- START_46d9e73cfca504c61ee4be3b6999d78f -->
<h2>Remove share specified activity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/remove-share" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/remove-share"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/remove-share',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/remove-share'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/remove-share</code></p>
<!-- END_46d9e73cfca504c61ee4be3b6999d78f -->
<!-- START_1dffbfda926912c6f46776975e41d907 -->
<h2>Display the specified activity in detail.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/detail',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/detail'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/detail</code></p>
<!-- END_1dffbfda926912c6f46776975e41d907 -->
<!-- START_a3187f8cb6946bc93861af01af9fdaa2 -->
<h2>Activity H5P</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/h5p" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/h5p"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/h5p',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/h5p'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/h5p</code></p>
<!-- END_a3187f8cb6946bc93861af01af9fdaa2 -->
<!-- START_7e83d18b23e84d0ab80a1f921f1ca721 -->
<h2>Get H5P Resource Settings for Activity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/h5p-resource-settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/h5p-resource-settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/h5p-resource-settings',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/h5p-resource-settings'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/h5p-resource-settings</code></p>
<!-- END_7e83d18b23e84d0ab80a1f921f1ca721 -->
<!-- START_e027e2d3223cd89db292893085a8d046 -->
<h2>Get H5P Resource Settings for Activity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/h5p-resource-settings-open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/h5p-resource-settings-open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/h5p-resource-settings-open',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/h5p-resource-settings-open'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/h5p-resource-settings-open</code></p>
<!-- END_e027e2d3223cd89db292893085a8d046 -->
<!-- START_5f86527ae6872d2a9c3c73871e38d78a -->
<h2>Display a listing of the activity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities</code></p>
<!-- END_5f86527ae6872d2a9c3c73871e38d78a -->
<!-- START_33aef576e6d971e2ba91dd3d8403d390 -->
<h2>Store a newly created activity in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/activities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/activities',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/activities</code></p>
<!-- END_33aef576e6d971e2ba91dd3d8403d390 -->
<!-- START_0c0cabe6076f4280d16c2869fadd9387 -->
<h2>Display the specified activity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}</code></p>
<!-- END_0c0cabe6076f4280d16c2869fadd9387 -->
<!-- START_66e6c51c201a5a8ca254ce9e8e8a63a9 -->
<h2>Update the specified activity in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/activities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/activities/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/activities/{activity}</code></p>
<p><code>PATCH api/v1/activities/{activity}</code></p>
<!-- END_66e6c51c201a5a8ca254ce9e8e8a63a9 -->
<!-- START_a428814a3c351226a73456c3b41d2a39 -->
<h2>Remove the specified activity from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/activities/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/activities/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/activities/{activity}</code></p>
<!-- END_a428814a3c351226a73456c3b41d2a39 -->
<!-- START_2c9d295c1b6e5666c66efa3ed320a8f8 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activity-types/1/items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types/1/items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activity-types/1/items',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types/1/items'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activity-types/{activityType}/items</code></p>
<!-- END_2c9d295c1b6e5666c66efa3ed320a8f8 -->
<!-- START_55b9d702946a5d4a899524a1e0fdb620 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activity-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activity-types',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activity-types</code></p>
<!-- END_55b9d702946a5d4a899524a1e0fdb620 -->
<!-- START_85ab13e9eb950cc1a9a115c97a9754df -->
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/activity-types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/activity-types',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/activity-types</code></p>
<!-- END_85ab13e9eb950cc1a9a115c97a9754df -->
<!-- START_bdb1b63e1ce9c0a14580db6d33352940 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activity-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activity-types/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activity-types/{activity_type}</code></p>
<!-- END_bdb1b63e1ce9c0a14580db6d33352940 -->
<!-- START_82481680410b6fd26e4ca153a77ab8b6 -->
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/activity-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/activity-types/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/activity-types/{activity_type}</code></p>
<p><code>PATCH api/v1/activity-types/{activity_type}</code></p>
<!-- END_82481680410b6fd26e4ca153a77ab8b6 -->
<!-- START_a41e82c2c835644769b62a94fe943bb2 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/activity-types/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-types/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/activity-types/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-types/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/activity-types/{activity_type}</code></p>
<!-- END_a41e82c2c835644769b62a94fe943bb2 -->
<!-- START_25035b0caacdd5b7032fb2b7c52260ca -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activity-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activity-items',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-items'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activity-items</code></p>
<!-- END_25035b0caacdd5b7032fb2b7c52260ca -->
<!-- START_1de79be21bc9ce181f82963d934b7602 -->
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/activity-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/activity-items',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-items'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/activity-items</code></p>
<!-- END_1de79be21bc9ce181f82963d934b7602 -->
<!-- START_d72216024b73d0dd45d171a00cd44ce9 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activity-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activity-items/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-items/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activity-items/{activity_item}</code></p>
<!-- END_d72216024b73d0dd45d171a00cd44ce9 -->
<!-- START_65149be1a44b052700677709a81a6c70 -->
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/activity-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/activity-items/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-items/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/activity-items/{activity_item}</code></p>
<p><code>PATCH api/v1/activity-items/{activity_item}</code></p>
<!-- END_65149be1a44b052700677709a81a6c70 -->
<!-- START_fc54754bce57b6e7aa5c36cf9350309a -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/activity-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activity-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/activity-items/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activity-items/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/activity-items/{activity_item}</code></p>
<!-- END_fc54754bce57b6e7aa5c36cf9350309a -->
<!-- START_d054a5a965ad514a7aab3dad28940801 -->
<h2>api/v1/users/{user}/metrics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users/1/metrics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1/metrics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users/1/metrics',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/1/metrics'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users/{user}/metrics</code></p>
<!-- END_d054a5a965ad514a7aab3dad28940801 -->
<!-- START_43ca8de14c5284893a2310b62bec88c0 -->
<h2>api/v1/users/{user}/membership</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/users/1/membership" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1/membership"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/users/1/membership',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/users/1/membership'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/users/{user}/membership</code></p>
<!-- END_43ca8de14c5284893a2310b62bec88c0 -->
<!-- START_c711e668f99fc561f6cec66cc5be5b22 -->
<h2>api/v1/h5p/ajax/libraries</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/libraries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/libraries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/libraries',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/libraries'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/libraries</code></p>
<p><code>POST api/v1/h5p/ajax/libraries</code></p>
<!-- END_c711e668f99fc561f6cec66cc5be5b22 -->
<!-- START_61242b587899ecf2e0299d7aac87c129 -->
<h2>api/v1/h5p/ajax/single-libraries</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/single-libraries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/single-libraries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/single-libraries',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/single-libraries'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/single-libraries</code></p>
<!-- END_61242b587899ecf2e0299d7aac87c129 -->
<!-- START_5e3d83c2d6d3468f5a604273809e11b0 -->
<h2>api/v1/h5p/ajax/content-type-cache</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/content-type-cache" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/content-type-cache"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/content-type-cache',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/content-type-cache'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/content-type-cache</code></p>
<p><code>POST api/v1/h5p/ajax/content-type-cache</code></p>
<p><code>PUT api/v1/h5p/ajax/content-type-cache</code></p>
<p><code>PATCH api/v1/h5p/ajax/content-type-cache</code></p>
<p><code>DELETE api/v1/h5p/ajax/content-type-cache</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/content-type-cache</code></p>
<!-- END_5e3d83c2d6d3468f5a604273809e11b0 -->
<!-- START_3b386c29bc55af48f86706d6942be5a8 -->
<h2>api/v1/h5p/ajax/library-install</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/library-install" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/library-install"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/library-install',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/library-install'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/library-install</code></p>
<p><code>POST api/v1/h5p/ajax/library-install</code></p>
<p><code>PUT api/v1/h5p/ajax/library-install</code></p>
<p><code>PATCH api/v1/h5p/ajax/library-install</code></p>
<p><code>DELETE api/v1/h5p/ajax/library-install</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/library-install</code></p>
<!-- END_3b386c29bc55af48f86706d6942be5a8 -->
<!-- START_acd3b9d39a95869aec083f2110c00a05 -->
<h2>api/v1/h5p/ajax/library-upload</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/h5p/ajax/library-upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/library-upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/h5p/ajax/library-upload',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/library-upload'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/h5p/ajax/library-upload</code></p>
<!-- END_acd3b9d39a95869aec083f2110c00a05 -->
<!-- START_c16715cbda021553cbf0c71e70259255 -->
<h2>api/v1/h5p/ajax/filter</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/filter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/filter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/filter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/filter'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/filter</code></p>
<p><code>POST api/v1/h5p/ajax/filter</code></p>
<p><code>PUT api/v1/h5p/ajax/filter</code></p>
<p><code>PATCH api/v1/h5p/ajax/filter</code></p>
<p><code>DELETE api/v1/h5p/ajax/filter</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/filter</code></p>
<!-- END_c16715cbda021553cbf0c71e70259255 -->
<!-- START_8d849db0464b929d8d0e644cfedb8ae1 -->
<h2>api/v1/h5p/ajax/finish</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/finish" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/finish"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/finish',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/finish'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/finish</code></p>
<p><code>POST api/v1/h5p/ajax/finish</code></p>
<p><code>PUT api/v1/h5p/ajax/finish</code></p>
<p><code>PATCH api/v1/h5p/ajax/finish</code></p>
<p><code>DELETE api/v1/h5p/ajax/finish</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/finish</code></p>
<!-- END_8d849db0464b929d8d0e644cfedb8ae1 -->
<!-- START_9c501aa8cbd92faa887f97859dab467f -->
<h2>api/v1/h5p/ajax/content-user-data</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/content-user-data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/content-user-data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/content-user-data',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/content-user-data'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/content-user-data</code></p>
<p><code>POST api/v1/h5p/ajax/content-user-data</code></p>
<p><code>PUT api/v1/h5p/ajax/content-user-data</code></p>
<p><code>PATCH api/v1/h5p/ajax/content-user-data</code></p>
<p><code>DELETE api/v1/h5p/ajax/content-user-data</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/content-user-data</code></p>
<!-- END_9c501aa8cbd92faa887f97859dab467f -->
<!-- START_e284a1f1e8f09a03b553aa9c2ed4f443 -->
<h2>Get H5P Resource Settings for Activity</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/activities/1/h5p-resource-settings-shared" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/activities/1/h5p-resource-settings-shared"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/activities/1/h5p-resource-settings-shared',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/activities/1/h5p-resource-settings-shared'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "h5p": {
        "settings": {
            "baseUrl": "http:\/\/localhost:8000",
            "url": "http:\/\/localhost:8000\/storage\/h5p",
            "postUserStatistics": false,
            "ajax": {
                "setFinished": "http:\/\/localhost:8000\/api\/h5p\/ajax\/url",
                "contentUserData": "http:\/\/localhost:8000\/api\/h5p\/ajax\/content-user-data\/?content_id=:contentId&amp;data_type=:dataType&amp;sub_content_id=:subContentId"
            },
            "saveFreq": false,
            "siteUrl": "http:\/\/localhost:8000",
            "l10n": {
                "H5P": {
                    "fullscreen": "Fullscreen",
                    "disableFullscreen": "Disable fullscreen",
                    "download": "Download",
                    "copyrights": "Rights of use",
                    "embed": "Embed",
                    "reuseDescription": "Reuse this content.",
                    "size": "Size",
                    "showAdvanced": "Show advanced",
                    "hideAdvanced": "Hide advanced",
                    "advancedHelp": "Include this script on your website if you want dynamic sizing of the embedded content:",
                    "copyrightInformation": "Rights of use",
                    "close": "Close",
                    "title": "Title",
                    "author": "Author",
                    "year": "Year",
                    "source": "Source",
                    "license": "License",
                    "thumbnail": "Thumbnail",
                    "noCopyrights": "No copyright information available for this content.",
                    "downloadDescription": "Download this content as a H5P file.",
                    "copyrightsDescription": "View copyright information for this content.",
                    "embedDescription": "View the embed code for this content.",
                    "h5pDescription": "Visit H5P.org to check out more cool content.",
                    "contentChanged": "This content has changed since you last used it.",
                    "startingOver": "You'll be starting over.",
                    "confirmDialogHeader": "Confirm action",
                    "confirmDialogBody": "Please confirm that you wish to proceed. This action is not reversible.",
                    "cancelLabel": "Cancel",
                    "confirmLabel": "Confirm",
                    "reuse": "Reuse",
                    "reuseContent": "Reuse Content"
                }
            },
            "hubIsEnabled": false,
            "editor": {
                "filesPath": "http:\/\/localhost:8000\/storage\/h5p\/editor",
                "fileIcon": {
                    "path": "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/images\/binary-file.png",
                    "width": 50,
                    "height": 50
                },
                "ajaxPath": "http:\/\/localhost:8000\/api\/v1\/h5p\/ajax\/",
                "libraryUrl": "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/",
                "copyrightSemantics": {
                    "name": "copyright",
                    "type": "group",
                    "label": "Copyright information",
                    "fields": [
                        {
                            "name": "title",
                            "type": "text",
                            "label": "Title",
                            "placeholder": "La Gioconda",
                            "optional": true
                        },
                        {
                            "name": "author",
                            "type": "text",
                            "label": "Author",
                            "placeholder": "Leonardo da Vinci",
                            "optional": true
                        },
                        {
                            "name": "year",
                            "type": "text",
                            "label": "Year(s)",
                            "placeholder": "1503 - 1517",
                            "optional": true
                        },
                        {
                            "name": "source",
                            "type": "text",
                            "label": "Source",
                            "placeholder": "http:\/\/en.wikipedia.org\/wiki\/Mona_Lisa",
                            "optional": true,
                            "regexp": {
                                "pattern": "^http[s]?:\/\/.+",
                                "modifiers": "i"
                            }
                        },
                        {
                            "name": "license",
                            "type": "select",
                            "label": "License",
                            "default": "U",
                            "options": [
                                {
                                    "value": "U",
                                    "label": "Undisclosed"
                                },
                                {
                                    "value": "CC BY",
                                    "label": "Attribution",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "CC BY-SA",
                                    "label": "Attribution-ShareAlike",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "CC BY-ND",
                                    "label": "Attribution-NoDerivs",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "CC BY-NC",
                                    "label": "Attribution-NonCommercial",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "CC BY-NC-SA",
                                    "label": "Attribution-NonCommercial-ShareAlike",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "CC BY-NC-ND",
                                    "label": "Attribution-NonCommercial-NoDerivs",
                                    "versions": [
                                        {
                                            "value": "4.0",
                                            "label": "4.0 International"
                                        },
                                        {
                                            "value": "3.0",
                                            "label": "3.0 Unported"
                                        },
                                        {
                                            "value": "2.5",
                                            "label": "2.5 Generic"
                                        },
                                        {
                                            "value": "2.0",
                                            "label": "2.0 Generic"
                                        },
                                        {
                                            "value": "1.0",
                                            "label": "1.0 Generic"
                                        }
                                    ]
                                },
                                {
                                    "value": "GNU GPL",
                                    "label": "General Public License",
                                    "versions": [
                                        {
                                            "value": "v3",
                                            "label": "Version 3"
                                        },
                                        {
                                            "value": "v2",
                                            "label": "Version 2"
                                        },
                                        {
                                            "value": "v1",
                                            "label": "Version 1"
                                        }
                                    ]
                                },
                                {
                                    "value": "PD",
                                    "label": "Public Domain",
                                    "versions": [
                                        {
                                            "value": "-",
                                            "label": "-"
                                        },
                                        {
                                            "value": "CC0 1.0",
                                            "label": "CC0 1.0 Universal"
                                        },
                                        {
                                            "value": "CC PDM",
                                            "label": "Public Domain Mark"
                                        }
                                    ]
                                },
                                {
                                    "value": "C",
                                    "label": "Copyright"
                                }
                            ]
                        },
                        {
                            "name": "version",
                            "type": "select",
                            "label": "License Version",
                            "options": []
                        }
                    ]
                },
                "metadataSemantics": [
                    {
                        "name": "title",
                        "type": "text",
                        "label": "Title",
                        "placeholder": "La Gioconda"
                    },
                    {
                        "name": "license",
                        "type": "select",
                        "label": "License",
                        "default": "U",
                        "options": [
                            {
                                "value": "U",
                                "label": "Undisclosed"
                            },
                            {
                                "type": "optgroup",
                                "label": "Creative Commons",
                                "options": [
                                    {
                                        "value": "CC BY",
                                        "label": "Attribution (CC BY)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-SA",
                                        "label": "Attribution-ShareAlike (CC BY-SA)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-ND",
                                        "label": "Attribution-NoDerivs (CC BY-ND)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC",
                                        "label": "Attribution-NonCommercial (CC BY-NC)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC-SA",
                                        "label": "Attribution-NonCommercial-ShareAlike (CC BY-NC-SA)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC BY-NC-ND",
                                        "label": "Attribution-NonCommercial-NoDerivs (CC BY-NC-ND)",
                                        "versions": [
                                            {
                                                "value": "4.0",
                                                "label": "4.0 International"
                                            },
                                            {
                                                "value": "3.0",
                                                "label": "3.0 Unported"
                                            },
                                            {
                                                "value": "2.5",
                                                "label": "2.5 Generic"
                                            },
                                            {
                                                "value": "2.0",
                                                "label": "2.0 Generic"
                                            },
                                            {
                                                "value": "1.0",
                                                "label": "1.0 Generic"
                                            }
                                        ]
                                    },
                                    {
                                        "value": "CC0 1.0",
                                        "label": "Public Domain Dedication (CC0)"
                                    },
                                    {
                                        "value": "CC PDM",
                                        "label": "Public Domain Mark (PDM)"
                                    }
                                ]
                            },
                            {
                                "value": "GNU GPL",
                                "label": "General Public License v3"
                            },
                            {
                                "value": "PD",
                                "label": "Public Domain"
                            },
                            {
                                "value": "ODC PDDL",
                                "label": "Public Domain Dedication and Licence"
                            },
                            {
                                "value": "C",
                                "label": "Copyright"
                            }
                        ]
                    },
                    {
                        "name": "licenseVersion",
                        "type": "select",
                        "label": "License Version",
                        "options": [
                            {
                                "value": "4.0",
                                "label": "4.0 International"
                            },
                            {
                                "value": "3.0",
                                "label": "3.0 Unported"
                            },
                            {
                                "value": "2.5",
                                "label": "2.5 Generic"
                            },
                            {
                                "value": "2.0",
                                "label": "2.0 Generic"
                            },
                            {
                                "value": "1.0",
                                "label": "1.0 Generic"
                            }
                        ],
                        "optional": true
                    },
                    {
                        "name": "yearFrom",
                        "type": "number",
                        "label": "Years (from)",
                        "placeholder": "1991",
                        "min": "-9999",
                        "max": "9999",
                        "optional": true
                    },
                    {
                        "name": "yearTo",
                        "type": "number",
                        "label": "Years (to)",
                        "placeholder": "1992",
                        "min": "-9999",
                        "max": "9999",
                        "optional": true
                    },
                    {
                        "name": "source",
                        "type": "text",
                        "label": "Source",
                        "placeholder": "https:\/\/",
                        "optional": true
                    },
                    {
                        "name": "authors",
                        "type": "list",
                        "field": {
                            "name": "author",
                            "type": "group",
                            "fields": [
                                {
                                    "label": "Author's name",
                                    "name": "name",
                                    "optional": true,
                                    "type": "text"
                                },
                                {
                                    "name": "role",
                                    "type": "select",
                                    "label": "Author's role",
                                    "default": "Author",
                                    "options": [
                                        {
                                            "value": "Author",
                                            "label": "Author"
                                        },
                                        {
                                            "value": "Editor",
                                            "label": "Editor"
                                        },
                                        {
                                            "value": "Licensee",
                                            "label": "Licensee"
                                        },
                                        {
                                            "value": "Originator",
                                            "label": "Originator"
                                        }
                                    ]
                                }
                            ]
                        }
                    },
                    {
                        "name": "licenseExtras",
                        "type": "text",
                        "widget": "textarea",
                        "label": "License Extras",
                        "optional": true,
                        "description": "Any additional information about the license"
                    },
                    {
                        "name": "changes",
                        "type": "list",
                        "field": {
                            "name": "change",
                            "type": "group",
                            "label": "Changelog",
                            "fields": [
                                {
                                    "name": "date",
                                    "type": "text",
                                    "label": "Date",
                                    "optional": true
                                },
                                {
                                    "name": "author",
                                    "type": "text",
                                    "label": "Changed by",
                                    "optional": true
                                },
                                {
                                    "name": "log",
                                    "type": "text",
                                    "widget": "textarea",
                                    "label": "Description of change",
                                    "placeholder": "Photo cropped, text changed, etc.",
                                    "optional": true
                                }
                            ]
                        }
                    },
                    {
                        "name": "authorComments",
                        "type": "text",
                        "widget": "textarea",
                        "label": "Author comments",
                        "description": "Comments for the editor of the content (This text will not be published as a part of copyright info)",
                        "optional": true
                    },
                    {
                        "name": "contentType",
                        "type": "text",
                        "widget": "none"
                    },
                    {
                        "name": "defaultLanguage",
                        "type": "text",
                        "widget": "none"
                    }
                ],
                "assets": {
                    "css": [
                        "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/css\/laravel-h5p.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-confirmation-dialog.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-core-button.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/libs\/darkroom.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/h5p-hub-client.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/fonts.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/application.css",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/styles\/css\/libs\/zebra_datepicker.min.css"
                    ],
                    "js": [
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/jquery.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-event-dispatcher.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api-event.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-content-type.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-confirmation-dialog.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-action-bar.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/request-queue.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-editor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p-editor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5p-hub-client.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-semantic-structure.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library-selector.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-fullscreen-bar.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-form.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-text.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-html.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-number.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-textarea.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-file-uploader.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-file.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-image.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-image-popup.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-av.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-group.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-boolean.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-list.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-list-editor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-library-list-cache.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-select.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-selector-hub.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-selector-legacy.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-dimensions.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-coordinates.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-none.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata-author-widget.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-metadata-changelog-widget.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-pre-save.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/ckeditor\/ckeditor.js",
                        "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/language\/en.js"
                    ]
                },
                "deleteMessage": "laravel-h5p.content.destoryed",
                "apiVersion": {
                    "majorVersion": 1,
                    "minorVersion": 24
                }
            },
            "loadedJs": [],
            "loadedCss": [],
            "core": {
                "styles": [
                    "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/css\/laravel-h5p.css",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p.css",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-confirmation-dialog.css",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/styles\/h5p-core-button.css"
                ],
                "scripts": [
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/jquery.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-event-dispatcher.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api-event.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-x-api.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-content-type.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-confirmation-dialog.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-action-bar.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/request-queue.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/h5p-editor\/scripts\/h5peditor-editor.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/laravel-h5p\/js\/laravel-h5p.js",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                    "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9"
                ]
            },
            "contents": {
                "cid-59": {
                    "library": "H5P.InteractiveVideo 1.21",
                    "jsonContent": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "fullScreen": 1,
                    "exportUrl": "http:\/\/localhost:8000\/api\/v1\/h5p\/export\/59",
                    "embedCode": "&lt;iframe src=\"http:\/\/localhost:3000\/h5p\/embed\/59\" width=\":w\" height=\":h\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"&gt;&lt;\/iframe&gt;",
                    "resizeCode": "&lt;script src=\"http:\/\/localhost:8000\/storage\/h5p\/h5p-core\/js\/h5p-resizer.js\" charset=\"UTF-8\"&gt;&lt;\/script&gt;",
                    "url": "http:\/\/localhost:8000\/h5p\/embed\/59",
                    "title": "Science of Golf: Why Balls Have Dimples",
                    "displayOptions": {
                        "frame": true,
                        "export": true,
                        "embed": true,
                        "copyright": false,
                        "icon": true,
                        "copy": false
                    },
                    "contentUserData": [
                        {
                            "state": "{}"
                        }
                    ],
                    "scripts": [
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/Drop-1.0\/js\/drop.min.js?ver=1.0.2",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Transition-1.0\/transition.js?ver=1.0.4",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-help-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-message-dialog.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progress-circle.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-simple-rounded-button.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-speech-bubble.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-throbber.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-tip.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-slider.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-score-bar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-progressbar.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/js\/joubel-ui.js?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/question.js?ver=1.4.7",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/explainer.js?ver=1.4.7",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/scripts\/score-points.js?ver=1.4.7",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SoundJS-1.0\/soundjs-0.6.2.min.js?ver=1.0.2",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/stop-watch.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/sound-effects.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/xapi-event-builder.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/result-slide.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/solution-view.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice-alternative.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/scripts\/single-choice-set.js?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/stop-watch.js?ver=1.10.8",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/xapi-event-builder.js?ver=1.10.8",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/js\/summary.js?ver=1.10.8",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNDrop-1.1\/drag-n-drop.js?ver=1.1.5",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNResize-1.2\/H5P.DragNResize.js?ver=1.2.6",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar.js?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/context-menu.js?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/dialog.js?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar-element.js?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/scripts\/drag-n-bar-form-manager.js?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/flowplayer-1.0\/scripts\/flowplayer-3.2.12.min.js?ver=1.0.5",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/youtube.js?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/panopto.js?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/html5.js?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/flash.js?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/scripts\/video.js?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/jQuery.ui-1.10\/h5p-jquery-ui.js?ver=1.10.19",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.InteractiveVideo-1.21\/dist\/h5p-interactive-video.js?ver=1.21.9"
                    ],
                    "styles": [
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/FontAwesome-4.5\/h5p-font-awesome.min.css?ver=4.5.4",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/Drop-1.0\/css\/drop-theme-arrows-bounce.min.css?ver=1.0.2",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.FontIcons-1.0\/styles\/h5p-font-icons.css?ver=1.0.6",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-help-dialog.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-message-dialog.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-progress-circle.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-simple-rounded-button.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-speech-bubble.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-tip.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-slider.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-score-bar.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-progressbar.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-ui.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.JoubelUI-1.3\/css\/joubel-icon.css?ver=1.3.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/styles\/question.css?ver=1.4.7",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Question-1.4\/styles\/explainer.css?ver=1.4.7",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.SingleChoiceSet-1.11\/styles\/single-choice-set.css?ver=1.11.9",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Summary-1.10\/css\/summary.css?ver=1.10.8",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNResize-1.2\/H5P.DragNResize.css?ver=1.2.6",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/drag-n-bar.css?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/dialog.css?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/context-menu.css?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.DragNBar-1.5\/styles\/drag-n-bar-form-manager.css?ver=1.5.10",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.Video-1.5\/styles\/video.css?ver=1.5.12",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/jQuery.ui-1.10\/h5p-jquery-ui.css?ver=1.10.19",
                        "http:\/\/localhost:8000\/storage\/h5p\/libraries\/H5P.InteractiveVideo-1.21\/dist\/h5p-interactive-video.css?ver=1.21.9"
                    ]
                }
            }
        },
        "user": null,
        "embed_code": "&lt;div class=\"h5p-iframe-wrapper\"&gt;&lt;iframe id=\"h5p-iframe-59\" class=\"h5p-iframe\" data-content-id=\"59\" style=\"height: 1px\" src=\"about:blank\" frameBorder=\"0\" scrolling=\"no\"&gt;&lt;\/iframe&gt;&lt;\/div&gt;"
    },
    "activity": {
        "id": 1,
        "playlist_id": 1,
        "title": "",
        "type": "h5p",
        "content": "",
        "shared": false,
        "order": 2,
        "thumb_url": null,
        "subject_id": null,
        "education_level_id": null,
        "h5p_content": {
            "id": 59,
            "created_at": "2020-04-30T20:24:58.000000Z",
            "updated_at": "2020-04-30T20:24:58.000000Z",
            "user_id": 1,
            "title": "Science of Golf: Why Balls Have Dimples",
            "library_id": 40,
            "parameters": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"},\"aspectRatio\":\"16:9\"}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"bookmarks\":[],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
            "filtered": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
            "slug": "science-of-golf-why-balls-have-dimples",
            "embed_type": "div",
            "disable": 9,
            "content_type": null,
            "authors": null,
            "source": null,
            "year_from": null,
            "year_to": null,
            "license": "U",
            "license_version": null,
            "license_extras": null,
            "author_comments": null,
            "changes": null,
            "default_language": null
        },
        "is_public": false,
        "created_at": null,
        "updated_at": null
    },
    "playlist": {
        "id": 1,
        "title": "The Engineering &amp; Design Behind Golf Balls",
        "order": 0,
        "is_public": true,
        "project_id": 1,
        "project": {
            "id": 1,
            "name": "The Science of Golf",
            "description": "Uncover the science, technology, engineering, and mathematics behind the game of golf.",
            "thumb_url": "\/storage\/uploads\/nN5y8v8zh2ghxrKuHCv5wvJOREFw0Nr27s2DPxWq.png",
            "shared": false,
            "starter_project": false,
            "users": [
                {
                    "id": 1,
                    "first_name": "test",
                    "last_name": "test",
                    "email": "localuser@local.com",
                    "role": "owner"
                }
            ],
            "is_public": true,
            "created_at": "2020-04-30T20:03:12.000000Z",
            "updated_at": "2020-07-11T12:51:07.000000Z"
        },
        "activities": [
            {
                "id": 4,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 0,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 65,
                    "created_at": "2020-04-30T23:40:49.000000Z",
                    "updated_at": "2020-04-30T23:40:49.000000Z",
                    "user_id": 1,
                    "title": "Labeling Golf Ball - Principles of Physics",
                    "library_id": 19,
                    "parameters": "{\"scoreShow\":\"Check\",\"tryAgain\":\"Retry\",\"scoreExplanation\":\"Correct answers give +1 point. Incorrect answers give -1 point. The lowest possible score is 0.\",\"question\":{\"settings\":{\"size\":{\"width\":620,\"height\":310},\"background\":{\"path\":\"images\\\/background-5eab614083be2.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":620,\"height\":310}},\"task\":{\"elements\":[{\"x\":0,\"y\":47.96909692035003,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Lift&lt;\\\/p&gt;\\n\"},\"subContentId\":\"be1d9b11-91ff-4e59-a7c6-9966e1bf8cb2\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Lift\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Lift\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":58.810763796296285,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Drag&lt;\\\/p&gt;\\n\"},\"subContentId\":\"05a00202-b5dd-44a9-acf1-0cce77278b33\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Drag\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":36.89236101851851,\"width\":7.812090416666667,\"height\":1.281997824074074,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Spin&lt;\\\/p&gt;\\n\"},\"subContentId\":\"140a5423-873b-46d4-8f4f-9b236cefce20\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Spin\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Spin\"}},\"backgroundOpacity\":100,\"multiple\":false}],\"dropZones\":[{\"x\":72.35516653328209,\"y\":14.75972212933847,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"0\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Lift&lt;\\\/div&gt;\\n\"},{\"x\":72.35484909201396,\"y\":36.89236101851851,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"1\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Drag&lt;\\\/div&gt;\\n\"},{\"x\":72.35516653328209,\"y\":51.65902745268465,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"2\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Spin&lt;\\\/div&gt;\\n\"}]}},\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableCheckButton\":true,\"showSolutionsRequiresInput\":true,\"singlePoint\":false,\"applyPenalties\":true,\"enableScoreExplanation\":true,\"dropZoneHighlighting\":\"dragging\",\"autoAlignSpacing\":2,\"enableFullScreen\":false,\"showScorePoints\":true,\"showTitle\":true},\"grabbablePrefix\":\"Grabbable {num} of {total}.\",\"grabbableSuffix\":\"Placed in dropzone {num}.\",\"dropzonePrefix\":\"Dropzone {num} of {total}.\",\"noDropzone\":\"No dropzone.\",\"tipLabel\":\"Show tip.\",\"tipAvailable\":\"Tip available\",\"correctAnswer\":\"Correct answer\",\"wrongAnswer\":\"Wrong answer\",\"feedbackHeader\":\"Feedback\",\"scoreBarLabel\":\"You got :num out of :total points\",\"scoreExplanationButtonLabel\":\"Show score explanation\",\"localize\":{\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit fullscreen\"}}",
                    "filtered": "{\"scoreShow\":\"Check\",\"tryAgain\":\"Retry\",\"scoreExplanation\":\"Correct answers give +1 point. Incorrect answers give -1 point. The lowest possible score is 0.\",\"question\":{\"settings\":{\"size\":{\"width\":620,\"height\":310},\"background\":{\"path\":\"images\\\/background-5eab614083be2.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":620,\"height\":310}},\"task\":{\"elements\":[{\"x\":0,\"y\":47.96909692035003,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Lift&lt;\\\/p&gt;\\n\"},\"subContentId\":\"be1d9b11-91ff-4e59-a7c6-9966e1bf8cb2\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Lift\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":58.810763796296285,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Drag&lt;\\\/p&gt;\\n\"},\"subContentId\":\"05a00202-b5dd-44a9-acf1-0cce77278b33\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":36.89236101851851,\"width\":7.812090416666667,\"height\":1.281997824074074,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Spin&lt;\\\/p&gt;\\n\"},\"subContentId\":\"140a5423-873b-46d4-8f4f-9b236cefce20\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Spin\"}},\"backgroundOpacity\":100,\"multiple\":false}],\"dropZones\":[{\"x\":72.35516653328209,\"y\":14.75972212933847,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"0\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Lift&lt;\\\/div&gt;\\n\"},{\"x\":72.35484909201396,\"y\":36.89236101851851,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"1\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Drag&lt;\\\/div&gt;\\n\"},{\"x\":72.35516653328209,\"y\":51.65902745268465,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"2\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Spin&lt;\\\/div&gt;\\n\"}]}},\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableCheckButton\":true,\"showSolutionsRequiresInput\":true,\"singlePoint\":false,\"applyPenalties\":true,\"enableScoreExplanation\":true,\"dropZoneHighlighting\":\"dragging\",\"autoAlignSpacing\":2,\"enableFullScreen\":false,\"showScorePoints\":true,\"showTitle\":true},\"grabbablePrefix\":\"Grabbable {num} of {total}.\",\"grabbableSuffix\":\"Placed in dropzone {num}.\",\"dropzonePrefix\":\"Dropzone {num} of {total}.\",\"noDropzone\":\"No dropzone.\",\"tipLabel\":\"Show tip.\",\"tipAvailable\":\"Tip available\",\"correctAnswer\":\"Correct answer\",\"wrongAnswer\":\"Wrong answer\",\"feedbackHeader\":\"Feedback\",\"scoreBarLabel\":\"You got :num out of :total points\",\"scoreExplanationButtonLabel\":\"Show score explanation\",\"localize\":{\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit fullscreen\"}}",
                    "slug": "labeling-golf-ball-principles-of-physics",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 17774,
                "playlist_id": 1,
                "title": "abc",
                "type": "h5p",
                "content": "test",
                "shared": false,
                "order": null,
                "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png",
                "subject_id": "Mathematics",
                "education_level_id": null,
                "h5p_content": {
                    "id": 19334,
                    "created_at": "2020-08-30T20:09:56.000000Z",
                    "updated_at": "2020-08-30T20:09:56.000000Z",
                    "user_id": 1,
                    "title": "Latest",
                    "library_id": 98,
                    "parameters": "{\"l10n\":{\"recordAnswer\":\"Record\",\"pause\":\"Pause\",\"continue\":\"Continue\",\"download\":\"Download\",\"done\":\"Done\",\"retry\":\"Retry\",\"microphoneNotSupported\":\"Microphone not supported. Make sure you are using a browser that allows microphone recording.\",\"microphoneInaccessible\":\"Microphone is not accessible. Make sure that the browser microphone is enabled.\",\"insecureNotAllowed\":\"Access to microphone is not allowed in your browser since this page is not served using HTTPS. Please contact the author, and ask him to make this available using HTTPS\",\"statusReadyToRecord\":\"Press a button below to record your answer.\",\"statusRecording\":\"Recording...\",\"statusPaused\":\"Recording paused. Press a button to continue recording.\",\"statusFinishedRecording\":\"You have successfully recorded your answer! Listen to the recording below.\",\"downloadRecording\":\"Download this recording or retry.\",\"retryDialogHeaderText\":\"Retry recording?\",\"retryDialogBodyText\":\"By pressing \\\"Retry\\\" you will lose your current recording.\",\"retryDialogConfirmText\":\"Retry\",\"retryDialogCancelText\":\"Cancel\",\"statusCantCreateTheAudioFile\":\"Can't create the audio file.\"}}",
                    "filtered": "",
                    "slug": "latest",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": "2020-08-30T20:22:47.000000Z",
                "updated_at": "2020-08-30T20:22:47.000000Z"
            },
            {
                "id": 17776,
                "playlist_id": 1,
                "title": "abc",
                "type": "h5p",
                "content": "test",
                "shared": false,
                "order": null,
                "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png",
                "subject_id": "Mathematics",
                "education_level_id": null,
                "h5p_content": {
                    "id": 19334,
                    "created_at": "2020-08-30T20:09:56.000000Z",
                    "updated_at": "2020-08-30T20:09:56.000000Z",
                    "user_id": 1,
                    "title": "Latest",
                    "library_id": 98,
                    "parameters": "{\"l10n\":{\"recordAnswer\":\"Record\",\"pause\":\"Pause\",\"continue\":\"Continue\",\"download\":\"Download\",\"done\":\"Done\",\"retry\":\"Retry\",\"microphoneNotSupported\":\"Microphone not supported. Make sure you are using a browser that allows microphone recording.\",\"microphoneInaccessible\":\"Microphone is not accessible. Make sure that the browser microphone is enabled.\",\"insecureNotAllowed\":\"Access to microphone is not allowed in your browser since this page is not served using HTTPS. Please contact the author, and ask him to make this available using HTTPS\",\"statusReadyToRecord\":\"Press a button below to record your answer.\",\"statusRecording\":\"Recording...\",\"statusPaused\":\"Recording paused. Press a button to continue recording.\",\"statusFinishedRecording\":\"You have successfully recorded your answer! Listen to the recording below.\",\"downloadRecording\":\"Download this recording or retry.\",\"retryDialogHeaderText\":\"Retry recording?\",\"retryDialogBodyText\":\"By pressing \\\"Retry\\\" you will lose your current recording.\",\"retryDialogConfirmText\":\"Retry\",\"retryDialogCancelText\":\"Cancel\",\"statusCantCreateTheAudioFile\":\"Can't create the audio file.\"}}",
                    "filtered": "",
                    "slug": "latest",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": "2020-08-30T20:24:29.000000Z",
                "updated_at": "2020-08-30T20:24:29.000000Z"
            },
            {
                "id": 3,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 1,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 61,
                    "created_at": "2020-04-30T20:35:30.000000Z",
                    "updated_at": "2020-04-30T20:35:30.000000Z",
                    "user_id": 1,
                    "title": "Physics Vocabulary Study Guide",
                    "library_id": 63,
                    "parameters": "{\"panels\":[{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;Acceleration is the measurement of the change &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;span style=\\\"font-size:11.0pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;in an object\\u2019s velocity. &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"97578055-d386-46be-afe3-c19eae4108aa\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Acceleration\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Acceleration\"}},\"title\":\"Acceleration\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;The faster the air moves, the less pressure it exerts.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"0ce32fbf-4ff1-465b-9c50-8876c5fef34d\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Bernoulli\\u2019s Principle\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Bernoulli\\u2019s Principle\"}},\"title\":\"Bernoulli\\u2019s Principle\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;A vector is a quantity that has both a magnitude and a direction.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"cead752e-0c29-4acb-b9ae-2f61a3cd5c9b\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Vector\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Vector\"}},\"title\":\"Vector\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;Drag is the force that acts opposite to the direction of motion. Drag is caused by friction and differences in air pressure.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"6ae4b819-276d-405e-b085-e894c31484d3\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Drag\"}},\"title\":\"Drag\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:normal\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;A turbulent flow is one in which the particles have irregular, fluctuating motions and erratic paths.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"f9f63fdd-0a8a-4259-a3f1-ca7271b51727\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Turbulent airflow\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Turbulent airflow\"}},\"title\":\"Turbulent airflow\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;Friction is the resistance of motion when one object rubs against another. It is a force and is measured in newtons.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"236c832f-f754-47d6-8d2c-1311a354d861\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Friction\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Friction\"}},\"title\":\"Friction\"}],\"hTag\":\"h2\"}",
                    "filtered": "{\"panels\":[{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Acceleration is the measurement of the change &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;in an object\\u2019s velocity. &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"97578055-d386-46be-afe3-c19eae4108aa\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Acceleration\"}},\"title\":\"Acceleration\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;The faster the air moves, the less pressure it exerts.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"0ce32fbf-4ff1-465b-9c50-8876c5fef34d\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Bernoulli\\u2019s Principle\"}},\"title\":\"Bernoulli\\u2019s Principle\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;A vector is a quantity that has both a magnitude and a direction.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"cead752e-0c29-4acb-b9ae-2f61a3cd5c9b\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Vector\"}},\"title\":\"Vector\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Drag is the force that acts opposite to the direction of motion. Drag is caused by friction and differences in air pressure.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"6ae4b819-276d-405e-b085-e894c31484d3\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\"}},\"title\":\"Drag\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;A turbulent flow is one in which the particles have irregular, fluctuating motions and erratic paths.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"f9f63fdd-0a8a-4259-a3f1-ca7271b51727\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Turbulent airflow\"}},\"title\":\"Turbulent airflow\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Friction is the resistance of motion when one object rubs against another. It is a force and is measured in newtons.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"236c832f-f754-47d6-8d2c-1311a354d861\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Friction\"}},\"title\":\"Friction\"}],\"hTag\":\"h2\"}",
                    "slug": "physics-vocabulary-study-guide",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 1,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 2,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 59,
                    "created_at": "2020-04-30T20:24:58.000000Z",
                    "updated_at": "2020-04-30T20:24:58.000000Z",
                    "user_id": 1,
                    "title": "Science of Golf: Why Balls Have Dimples",
                    "library_id": 40,
                    "parameters": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"},\"aspectRatio\":\"16:9\"}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"bookmarks\":[],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "filtered": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "slug": "science-of-golf-why-balls-have-dimples",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 3,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 60,
                    "created_at": "2020-04-30T20:31:11.000000Z",
                    "updated_at": "2020-04-30T20:31:11.000000Z",
                    "user_id": 1,
                    "title": "Physics and Golf Balls",
                    "library_id": 60,
                    "parameters": "{\"cards\":[{\"text\":\"Is the measurement of the change in an object\\u2019s velocity called Speed or Acceleration?\",\"answer\":\"Acceleration\",\"image\":{\"path\":\"images\\\/image-5eab35098aaf0.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Dimples reduce wind resistance or aerodynamic drag. Does that make the ball go farther or faster?\",\"answer\":\"Farther\",\"image\":{\"path\":\"images\\\/image-5eab355f7ca78.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Do dimples on a ball increase or decrease the lift?\",\"answer\":\"Increase\",\"image\":{\"path\":\"images\\\/image-5eab3589be9e3.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":634,\"height\":508},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"See if you can remember what you learned!\"}",
                    "filtered": "{\"cards\":[{\"text\":\"Is the measurement of the change in an object\\u2019s velocity called Speed or Acceleration?\",\"answer\":\"Acceleration\",\"image\":{\"path\":\"images\\\/image-5eab35098aaf0.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Dimples reduce wind resistance or aerodynamic drag. Does that make the ball go farther or faster?\",\"answer\":\"Farther\",\"image\":{\"path\":\"images\\\/image-5eab355f7ca78.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Do dimples on a ball increase or decrease the lift?\",\"answer\":\"Increase\",\"image\":{\"path\":\"images\\\/image-5eab3589be9e3.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":634,\"height\":508},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"See if you can remember what you learned!\"}",
                    "slug": "physics-and-golf-balls",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 6,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 4,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 75,
                    "created_at": "2020-05-01T04:51:11.000000Z",
                    "updated_at": "2020-05-01T04:51:11.000000Z",
                    "user_id": 1,
                    "title": "Understanding Gear Effect | Equipment and Tech | 18Birdies",
                    "library_id": 40,
                    "parameters": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/www.youtube.com\\\/watch?v=FdH0JQL5E-U&amp;list=PLVIShUJLAj0rWw3Yr3VtFGH4IbIVMfQFo\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"},\"aspectRatio\":\"16:9\"}]},\"assets\":{\"interactions\":[{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":52,\"to\":52},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"c9f0c83d-2ba2-4810-843a-1ee7bec2076f\",\"question\":\"&lt;p&gt;\\\"Torque\\\"&amp;nbsp;is&amp;nbsp;a property of golf&amp;nbsp;shafts that describes how much the shaft is&amp;nbsp;prone to twisting during the golf&amp;nbsp;swing.&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;True&lt;\\\/p&gt;\\n\",\"&lt;p&gt;False&lt;\\\/p&gt;\\n\"]},{\"subContentId\":\"81f2e02c-0f04-44a3-922c-4eac61a11acb\",\"question\":\"&lt;p&gt;... A shaft with a _____ torque&amp;nbsp;rating means&amp;nbsp;the shaft better resists twisting; a shaft with a ____ torque&amp;nbsp;rating means&amp;nbsp;the shaft is&amp;nbsp;more prone to twisting (all other things being equal).&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;lower,&amp;nbsp;higher&lt;\\\/p&gt;\\n\",\"&lt;p&gt;higher, lower&lt;\\\/p&gt;\\n\",\"&lt;p&gt;sharper, duller&lt;\\\/p&gt;\\n\",\"&lt;p&gt;straigher, curved&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"eadebb1e-891e-4ff3-8676-943c2616a9e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Untitled Single Choice Set\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Single Choice Set\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":24.314,\"to\":34.314},\"libraryTitle\":\"Statements\",\"action\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"7bce98af-5267-4ca6-a08c-0c8f2bef5afb\",\"summary\":[\"Gear effect is the term used to explain how and why hitting the ball off-center changes the ball flight.\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to adjust the pressure on the clubhead.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to ride your bike to the course.&lt;\\\/p&gt;\\n\"],\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"3b954191-ad43-452c-95c3-868047eb55be\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"}},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":145.688,\"to\":155.688},\"libraryTitle\":\"Multiple Choice\",\"action\":{\"library\":\"H5P.MultiChoice 1.14\",\"params\":{\"media\":{\"type\":{\"params\":{}},\"disableImageZooming\":false},\"answers\":[{\"correct\":true,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the right, causing a fade&amp;nbsp;\\\/ slice curved flight.&lt;\\\/div&gt;\\n\"},{\"correct\":false,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the left, causing a &lt;strong&gt;slice&lt;\\\/strong&gt; curved flight.&lt;\\\/div&gt;\\n\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableSolutionsButton\":true,\"enableCheckButton\":true,\"type\":\"auto\",\"singlePoint\":false,\"randomAnswers\":true,\"showSolutionsRequiresInput\":true,\"confirmCheckDialog\":false,\"confirmRetryDialog\":false,\"autoCheck\":false,\"passPercentage\":100,\"showScorePoints\":true},\"UI\":{\"checkAnswerButton\":\"Check\",\"showSolutionButton\":\"Show solution\",\"tryAgainButton\":\"Retry\",\"tipsLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"tipAvailable\":\"Tip available\",\"feedbackAvailable\":\"Feedback available\",\"readFeedback\":\"Read feedback\",\"wrongAnswer\":\"Wrong answer\",\"correctAnswer\":\"Correct answer\",\"shouldCheck\":\"Should have been checked\",\"shouldNotCheck\":\"Should not have been checked\",\"noInput\":\"Please answer before viewing the solution\"},\"confirmCheck\":{\"header\":\"Finish ?\",\"body\":\"Are you sure you wish to finish ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Finish\"},\"confirmRetry\":{\"header\":\"Retry ?\",\"body\":\"Are you sure you wish to retry ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Confirm\"},\"question\":\"&lt;p&gt;When a ball is spinning&amp;nbsp;in a clockwise&amp;nbsp;direction, there is high pressure on the left hand side of the ball, and low pressure on the right.&lt;\\\/p&gt;\\n\"},\"subContentId\":\"df5e99b0-6513-4aa9-a760-e3d9e2bfefe9\",\"metadata\":{\"contentType\":\"Multiple Choice\",\"license\":\"U\",\"title\":\"Untitled Multiple Choice\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Multiple Choice\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"}],\"bookmarks\":[],\"endscreens\":[{\"time\":358,\"label\":\"5:58 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"64506cb8-ea40-4c72-8c98-ed0bb3c3b808\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"b8eb5a4d-5e2e-4b74-95f5-ca37d1a45186\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":true,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false,\"startVideoAt\":37},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "filtered": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/www.youtube.com\\\/watch?v=FdH0JQL5E-U&amp;amp;list=PLVIShUJLAj0rWw3Yr3VtFGH4IbIVMfQFo\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":52,\"to\":52},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"c9f0c83d-2ba2-4810-843a-1ee7bec2076f\",\"question\":\"&lt;p&gt;\\\"Torque\\\"&amp;nbsp;is&amp;nbsp;a property of golf&amp;nbsp;shafts that describes how much the shaft is&amp;nbsp;prone to twisting during the golf&amp;nbsp;swing.&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;True&lt;\\\/p&gt;\\n\",\"&lt;p&gt;False&lt;\\\/p&gt;\\n\"]},{\"subContentId\":\"81f2e02c-0f04-44a3-922c-4eac61a11acb\",\"question\":\"&lt;p&gt;... A shaft with a _____ torque&amp;nbsp;rating means&amp;nbsp;the shaft better resists twisting; a shaft with a ____ torque&amp;nbsp;rating means&amp;nbsp;the shaft is&amp;nbsp;more prone to twisting (all other things being equal).&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;lower,&amp;nbsp;higher&lt;\\\/p&gt;\\n\",\"&lt;p&gt;higher, lower&lt;\\\/p&gt;\\n\",\"&lt;p&gt;sharper, duller&lt;\\\/p&gt;\\n\",\"&lt;p&gt;straigher, curved&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"eadebb1e-891e-4ff3-8676-943c2616a9e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Untitled Single Choice Set\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":24.314,\"to\":34.314},\"libraryTitle\":\"Statements\",\"action\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"7bce98af-5267-4ca6-a08c-0c8f2bef5afb\",\"summary\":[\"Gear effect is the term used to explain how and why hitting the ball off-center changes the ball flight.\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to adjust the pressure on the clubhead.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to ride your bike to the course.&lt;\\\/p&gt;\\n\"],\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"3b954191-ad43-452c-95c3-868047eb55be\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"}},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":145.688,\"to\":155.688},\"libraryTitle\":\"Multiple Choice\",\"action\":{\"library\":\"H5P.MultiChoice 1.14\",\"params\":{\"media\":{\"disableImageZooming\":false},\"answers\":[{\"correct\":true,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the right, causing a fade&amp;nbsp;\\\/ slice curved flight.&lt;\\\/div&gt;\\n\"},{\"correct\":false,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the left, causing a &lt;strong&gt;slice&lt;\\\/strong&gt; curved flight.&lt;\\\/div&gt;\\n\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableSolutionsButton\":true,\"enableCheckButton\":true,\"type\":\"auto\",\"singlePoint\":false,\"randomAnswers\":true,\"showSolutionsRequiresInput\":true,\"confirmCheckDialog\":false,\"confirmRetryDialog\":false,\"autoCheck\":false,\"passPercentage\":100,\"showScorePoints\":true},\"UI\":{\"checkAnswerButton\":\"Check\",\"showSolutionButton\":\"Show solution\",\"tryAgainButton\":\"Retry\",\"tipsLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"tipAvailable\":\"Tip available\",\"feedbackAvailable\":\"Feedback available\",\"readFeedback\":\"Read feedback\",\"wrongAnswer\":\"Wrong answer\",\"correctAnswer\":\"Correct answer\",\"shouldCheck\":\"Should have been checked\",\"shouldNotCheck\":\"Should not have been checked\",\"noInput\":\"Please answer before viewing the solution\"},\"confirmCheck\":{\"header\":\"Finish ?\",\"body\":\"Are you sure you wish to finish ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Finish\"},\"confirmRetry\":{\"header\":\"Retry ?\",\"body\":\"Are you sure you wish to retry ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Confirm\"},\"question\":\"&lt;p&gt;When a ball is spinning&amp;nbsp;in a clockwise&amp;nbsp;direction, there is high pressure on the left hand side of the ball, and low pressure on the right.&lt;\\\/p&gt;\\n\"},\"subContentId\":\"df5e99b0-6513-4aa9-a760-e3d9e2bfefe9\",\"metadata\":{\"contentType\":\"Multiple Choice\",\"license\":\"U\",\"title\":\"Untitled Multiple Choice\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"}],\"endscreens\":[{\"time\":358,\"label\":\"5:58 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"64506cb8-ea40-4c72-8c98-ed0bb3c3b808\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"b8eb5a4d-5e2e-4b74-95f5-ca37d1a45186\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":true,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false,\"startVideoAt\":37},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "slug": "understanding-gear-effect-equipment-and-tech-18birdies",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 5,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 5,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 66,
                    "created_at": "2020-04-30T23:58:44.000000Z",
                    "updated_at": "2020-04-30T23:58:44.000000Z",
                    "user_id": 1,
                    "title": "The Evolution of the Golf Ball",
                    "library_id": 61,
                    "parameters": "{\"timeline\":{\"defaultZoomLevel\":\"0\",\"height\":600,\"asset\":{},\"date\":[{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab648fb61c9.jpeg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":234,\"height\":216}},\"startDate\":\"1400\",\"endDate\":\"2020\",\"headline\":\"Origins of Golf\",\"text\":\"&lt;p&gt;Golf is recorded in its first recognizable form in the Eastern Coast of Scotland.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab64e26de00.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":222}},\"startDate\":\"1600\",\"headline\":\"Wood Golf Balls\",\"text\":\"&lt;p&gt;The first known golf ball was made out of wood, most likely beech, boxroot and similar hardwoods. Wooden clubs were the golf club of choice, which in conjunction with the wood balls would have made your friendly game of golf a rather jarring experience.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab652f19393.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1128,\"height\":1096}},\"startDate\":\"1618\",\"headline\":\"Feathery Golf Balls\",\"text\":\"&lt;p&gt;The first \\\"real\\\" golf ball was known as a \\\"feathery\\\"golf ball. Basically, the feathery was a leather sack filled with boiled goose feathers, then stitched up and painted. Feathery golf balls were expensive to make easily damaged and only the privileged few could afford to use them.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;It was made of cow or horsehide which was stuffed with feathers; most often goose feather. The leather, in order to be easier to work with, was soaked in water. The feathers that were forced into the ball by using a specially designed crutch-handled filling rod were soaked as well.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;After the ball was carefully hand sewn together, it was left to dry. While the leather shrank, the feathers expanded, which made the ball very hard and compact.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;Interestingly, the featherie also had excellent flight characteristics as it could reach a distance of up to 175 yards; although the longest recorded distance is more than 361 yards.&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab658fa6bde.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1350,\"height\":759},\"media\":\"https:\\\/\\\/images.app.goo.gl\\\/MFHFL1dtDiyR5nGq7\"},\"startDate\":\"1848\",\"headline\":\"Cost of Golf Balls\",\"text\":\"&lt;p&gt;In the mid-19th century, most people could only dream of playing golf. There were at the time fewer than 20 golf clubs around the world, with just three being outside Scotland. But that was not the only thing that prevented most people from playing golf. The high cost of golf essentials, especially of golf balls, made the game pretty much inaccessible to ordinary people.31 But that was soon about to change...&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab65cbe1adb.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":944,\"height\":890}},\"startDate\":\"1848\",\"endDate\":\"1890\",\"headline\":\"Gutty Golf Balls\",\"text\":\"&lt;p&gt;It wasn't until 1848 that Rev. Dr. Robert Adams began creating golf balls out of Gutta Percha \\\"Gutty\\\". The Gutty golf ball was created from the dried sap of the Sapodilla tree. It had a rubber-like feel and was formed into ball shapes by heating it up and shaping it while hot.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;The arrival of the gutta percha ball or \\\"gutty\\\", as it was called, revolutionized the game of golf and allowed its spread to the masses due to its affordability, playability and durability.&lt;\\\/p&gt;\\n\"},{\"asset\":{},\"startDate\":\"1899\",\"headline\":\"Hand Hammered Gutta Ball\",\"text\":\"&lt;p&gt;American businessman and inventor Coburn Haskell (1868-1922) got a (joint) patent from the United States Patent Office for the rubber-wound ball47 which would soon lead to another revolution in golf. Widely regarded as the first modern golf ball, Haskell\\u2019s ball was made of a solid rubber-wound core that was covered by guttapercha.&lt;\\\/p&gt;\\n\"}],\"language\":\"en\",\"headline\":\"The Evolution of the Golf Ball\",\"text\":\"&lt;div&gt;A golf ball is central to the game of golf. In fact, golf is all about the ball. Well, getting it into the hole in the ground!&lt;\\\/div&gt;\\n\",\"backgroundImage\":{\"path\":\"images\\\/backgroundImage-5eab633e2e935.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":2139,\"height\":1179}}}",
                    "filtered": "{\"timeline\":{\"defaultZoomLevel\":\"0\",\"height\":600,\"asset\":{},\"date\":[{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab648fb61c9.jpeg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":234,\"height\":216}},\"startDate\":\"1400\",\"endDate\":\"2020\",\"headline\":\"Origins of Golf\",\"text\":\"&lt;p&gt;Golf is recorded in its first recognizable form in the Eastern Coast of Scotland.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab64e26de00.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":222}},\"startDate\":\"1600\",\"headline\":\"Wood Golf Balls\",\"text\":\"&lt;p&gt;The first known golf ball was made out of wood, most likely beech, boxroot and similar hardwoods. Wooden clubs were the golf club of choice, which in conjunction with the wood balls would have made your friendly game of golf a rather jarring experience.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab652f19393.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1128,\"height\":1096}},\"startDate\":\"1618\",\"headline\":\"Feathery Golf Balls\",\"text\":\"&lt;p&gt;The first \\\"real\\\" golf ball was known as a \\\"feathery\\\"golf ball. Basically, the feathery was a leather sack filled with boiled goose feathers, then stitched up and painted. Feathery golf balls were expensive to make easily damaged and only the privileged few could afford to use them.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;It was made of cow or horsehide which was stuffed with feathers; most often goose feather. The leather, in order to be easier to work with, was soaked in water. The feathers that were forced into the ball by using a specially designed crutch-handled filling rod were soaked as well.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;After the ball was carefully hand sewn together, it was left to dry. While the leather shrank, the feathers expanded, which made the ball very hard and compact.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;Interestingly, the featherie also had excellent flight characteristics as it could reach a distance of up to 175 yards; although the longest recorded distance is more than 361 yards.&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab658fa6bde.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1350,\"height\":759},\"media\":\"https:\\\/\\\/images.app.goo.gl\\\/MFHFL1dtDiyR5nGq7\"},\"startDate\":\"1848\",\"headline\":\"Cost of Golf Balls\",\"text\":\"&lt;p&gt;In the mid-19th century, most people could only dream of playing golf. There were at the time fewer than 20 golf clubs around the world, with just three being outside Scotland. But that was not the only thing that prevented most people from playing golf. The high cost of golf essentials, especially of golf balls, made the game pretty much inaccessible to ordinary people.31 But that was soon about to change...&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab65cbe1adb.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":944,\"height\":890}},\"startDate\":\"1848\",\"endDate\":\"1890\",\"headline\":\"Gutty Golf Balls\",\"text\":\"&lt;p&gt;It wasn't until 1848 that Rev. Dr. Robert Adams began creating golf balls out of Gutta Percha \\\"Gutty\\\". The Gutty golf ball was created from the dried sap of the Sapodilla tree. It had a rubber-like feel and was formed into ball shapes by heating it up and shaping it while hot.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;The arrival of the gutta percha ball or \\\"gutty\\\", as it was called, revolutionized the game of golf and allowed its spread to the masses due to its affordability, playability and durability.&lt;\\\/p&gt;\\n\"},{\"asset\":{},\"startDate\":\"1899\",\"headline\":\"Hand Hammered Gutta Ball\",\"text\":\"&lt;p&gt;American businessman and inventor Coburn Haskell (1868-1922) got a (joint) patent from the United States Patent Office for the rubber-wound ball47 which would soon lead to another revolution in golf. Widely regarded as the first modern golf ball, Haskell\\u2019s ball was made of a solid rubber-wound core that was covered by guttapercha.&lt;\\\/p&gt;\\n\"}],\"language\":\"en\",\"headline\":\"The Evolution of the Golf Ball\",\"text\":\"&lt;div&gt;A golf ball is central to the game of golf. In fact, golf is all about the ball. Well, getting it into the hole in the ground!&lt;\\\/div&gt;\\n\",\"backgroundImage\":{\"path\":\"images\\\/backgroundImage-5eab633e2e935.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":2139,\"height\":1179}}}",
                    "slug": "the-evolution-of-the-golf-ball",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 7,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 6,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 76,
                    "created_at": "2020-05-01T05:20:54.000000Z",
                    "updated_at": "2020-05-01T05:20:54.000000Z",
                    "user_id": 1,
                    "title": "Famous Golf Holes",
                    "library_id": 60,
                    "parameters": "{\"cards\":[{\"answer\":\"7th Hole at Pebble Beach\",\"image\":{\"path\":\"images\\\/image-5eabad2e71b62.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":991,\"height\":500},\"tip\":\"&lt;p&gt;Mickey Mantle&lt;br&gt;\\nAT&amp;amp;T Pro Am&lt;\\\/p&gt;\\n\"},{\"answer\":\"12th hole at Augusta National\",\"image\":{\"path\":\"images\\\/image-5eabae675c197.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":847,\"height\":467},\"tip\":\"\"},{\"answer\":\"7th hole at TPC Sawgrass\",\"image\":{\"path\":\"images\\\/image-5eabaec199254.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1024,\"height\":570},\"tip\":\"\"},{\"answer\":\"The Old Course at St Andrews,  #18\",\"image\":{\"path\":\"images\\\/image-5eabafb2400f7.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":367},\"tip\":\"\"},{\"answer\":\"Pine Valley Golf Club, #18\",\"image\":{\"path\":\"images\\\/image-5eabb0ced23c3.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":960,\"height\":640},\"tip\":\"\"},{\"answer\":\"Celebrity Course - Indian Wells Golf Resort, #14\",\"image\":{\"path\":\"images\\\/image-5eabb17c9a715.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":780,\"height\":490},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"Match the Hole with the Course\"}",
                    "filtered": "{\"cards\":[{\"answer\":\"7th Hole at Pebble Beach\",\"image\":{\"path\":\"images\\\/image-5eabad2e71b62.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":991,\"height\":500},\"tip\":\"&lt;p&gt;Mickey Mantle&lt;br&gt;\\nAT&amp;amp;T Pro Am&lt;\\\/p&gt;\\n\"},{\"answer\":\"12th hole at Augusta National\",\"image\":{\"path\":\"images\\\/image-5eabae675c197.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":847,\"height\":467},\"tip\":\"\"},{\"answer\":\"7th hole at TPC Sawgrass\",\"image\":{\"path\":\"images\\\/image-5eabaec199254.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1024,\"height\":570},\"tip\":\"\"},{\"answer\":\"The Old Course at St Andrews,  #18\",\"image\":{\"path\":\"images\\\/image-5eabafb2400f7.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":367},\"tip\":\"\"},{\"answer\":\"Pine Valley Golf Club, #18\",\"image\":{\"path\":\"images\\\/image-5eabb0ced23c3.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":960,\"height\":640},\"tip\":\"\"},{\"answer\":\"Celebrity Course - Indian Wells Golf Resort, #14\",\"image\":{\"path\":\"images\\\/image-5eabb17c9a715.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":780,\"height\":490},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"Match the Hole with the Course\"}",
                    "slug": "famous-golf-holes",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            }
        ],
        "created_at": null,
        "updated_at": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/activities/{activity}/h5p-resource-settings-shared</code></p>
<!-- END_e284a1f1e8f09a03b553aa9c2ed4f443 -->
<!-- START_cda7f0d7113622786e742c924e982fcb -->
<h2>api/v1/h5p/ajax/files</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/ajax/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/ajax/files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/ajax/files',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/ajax/files'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/ajax/files</code></p>
<p><code>POST api/v1/h5p/ajax/files</code></p>
<p><code>PUT api/v1/h5p/ajax/files</code></p>
<p><code>PATCH api/v1/h5p/ajax/files</code></p>
<p><code>DELETE api/v1/h5p/ajax/files</code></p>
<p><code>OPTIONS api/v1/h5p/ajax/files</code></p>
<!-- END_cda7f0d7113622786e742c924e982fcb -->
<!-- START_90a28636b6b4c7651166e914ac835a69 -->
<h2>api/v1/h5p/export/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/h5p/export/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/h5p/export/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/h5p/export/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/h5p/export/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/h5p/export/{id}</code></p>
<!-- END_90a28636b6b4c7651166e914ac835a69 -->
<!-- START_d918564ca41db24ba48fe607b56f9c4d -->
<h2>Display the lti playlist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/playlists/1/lti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/playlists/1/lti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/playlists/1/lti',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/playlists/1/lti'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "playlist": {
        "id": 1,
        "title": "The Engineering &amp; Design Behind Golf Balls",
        "order": 0,
        "is_public": true,
        "project_id": 1,
        "project": {
            "id": 1,
            "name": "The Science of Golf",
            "description": "Uncover the science, technology, engineering, and mathematics behind the game of golf.",
            "thumb_url": "\/storage\/uploads\/nN5y8v8zh2ghxrKuHCv5wvJOREFw0Nr27s2DPxWq.png",
            "shared": false,
            "starter_project": false,
            "users": [
                {
                    "id": 1,
                    "first_name": "test",
                    "last_name": "test",
                    "email": "localuser@local.com",
                    "role": "owner"
                }
            ],
            "is_public": true,
            "created_at": "2020-04-30T20:03:12.000000Z",
            "updated_at": "2020-07-11T12:51:07.000000Z"
        },
        "activities": [
            {
                "id": 4,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 0,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 65,
                    "created_at": "2020-04-30T23:40:49.000000Z",
                    "updated_at": "2020-04-30T23:40:49.000000Z",
                    "user_id": 1,
                    "title": "Labeling Golf Ball - Principles of Physics",
                    "library_id": 19,
                    "parameters": "{\"scoreShow\":\"Check\",\"tryAgain\":\"Retry\",\"scoreExplanation\":\"Correct answers give +1 point. Incorrect answers give -1 point. The lowest possible score is 0.\",\"question\":{\"settings\":{\"size\":{\"width\":620,\"height\":310},\"background\":{\"path\":\"images\\\/background-5eab614083be2.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":620,\"height\":310}},\"task\":{\"elements\":[{\"x\":0,\"y\":47.96909692035003,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Lift&lt;\\\/p&gt;\\n\"},\"subContentId\":\"be1d9b11-91ff-4e59-a7c6-9966e1bf8cb2\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Lift\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Lift\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":58.810763796296285,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Drag&lt;\\\/p&gt;\\n\"},\"subContentId\":\"05a00202-b5dd-44a9-acf1-0cce77278b33\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Drag\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":36.89236101851851,\"width\":7.812090416666667,\"height\":1.281997824074074,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Spin&lt;\\\/p&gt;\\n\"},\"subContentId\":\"140a5423-873b-46d4-8f4f-9b236cefce20\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Spin\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Spin\"}},\"backgroundOpacity\":100,\"multiple\":false}],\"dropZones\":[{\"x\":72.35516653328209,\"y\":14.75972212933847,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"0\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Lift&lt;\\\/div&gt;\\n\"},{\"x\":72.35484909201396,\"y\":36.89236101851851,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"1\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Drag&lt;\\\/div&gt;\\n\"},{\"x\":72.35516653328209,\"y\":51.65902745268465,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"2\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"type\":{\"library\":\"H5P.DragQuestionDropzone 0.1\"},\"label\":\"&lt;div&gt;Spin&lt;\\\/div&gt;\\n\"}]}},\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableCheckButton\":true,\"showSolutionsRequiresInput\":true,\"singlePoint\":false,\"applyPenalties\":true,\"enableScoreExplanation\":true,\"dropZoneHighlighting\":\"dragging\",\"autoAlignSpacing\":2,\"enableFullScreen\":false,\"showScorePoints\":true,\"showTitle\":true},\"grabbablePrefix\":\"Grabbable {num} of {total}.\",\"grabbableSuffix\":\"Placed in dropzone {num}.\",\"dropzonePrefix\":\"Dropzone {num} of {total}.\",\"noDropzone\":\"No dropzone.\",\"tipLabel\":\"Show tip.\",\"tipAvailable\":\"Tip available\",\"correctAnswer\":\"Correct answer\",\"wrongAnswer\":\"Wrong answer\",\"feedbackHeader\":\"Feedback\",\"scoreBarLabel\":\"You got :num out of :total points\",\"scoreExplanationButtonLabel\":\"Show score explanation\",\"localize\":{\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit fullscreen\"}}",
                    "filtered": "{\"scoreShow\":\"Check\",\"tryAgain\":\"Retry\",\"scoreExplanation\":\"Correct answers give +1 point. Incorrect answers give -1 point. The lowest possible score is 0.\",\"question\":{\"settings\":{\"size\":{\"width\":620,\"height\":310},\"background\":{\"path\":\"images\\\/background-5eab614083be2.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":620,\"height\":310}},\"task\":{\"elements\":[{\"x\":0,\"y\":47.96909692035003,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Lift&lt;\\\/p&gt;\\n\"},\"subContentId\":\"be1d9b11-91ff-4e59-a7c6-9966e1bf8cb2\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Lift\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":58.810763796296285,\"width\":7.812090416666667,\"height\":1.3537570833333332,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Drag&lt;\\\/p&gt;\\n\"},\"subContentId\":\"05a00202-b5dd-44a9-acf1-0cce77278b33\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\"}},\"backgroundOpacity\":100,\"multiple\":false},{\"x\":-4.63163666049382e-8,\"y\":36.89236101851851,\"width\":7.812090416666667,\"height\":1.281997824074074,\"dropZones\":[\"0\",\"1\",\"2\"],\"type\":{\"library\":\"H5P.AdvancedText 1.1\",\"params\":{\"text\":\"&lt;p&gt;Spin&lt;\\\/p&gt;\\n\"},\"subContentId\":\"140a5423-873b-46d4-8f4f-9b236cefce20\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Spin\"}},\"backgroundOpacity\":100,\"multiple\":false}],\"dropZones\":[{\"x\":72.35516653328209,\"y\":14.75972212933847,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"0\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Lift&lt;\\\/div&gt;\\n\"},{\"x\":72.35484909201396,\"y\":36.89236101851851,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"1\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Drag&lt;\\\/div&gt;\\n\"},{\"x\":72.35516653328209,\"y\":51.65902745268465,\"width\":8.61111111111111,\"height\":2.511574074074074,\"correctElements\":[\"2\"],\"showLabel\":false,\"backgroundOpacity\":50,\"tipsAndFeedback\":{\"tip\":\"\"},\"single\":true,\"autoAlign\":true,\"label\":\"&lt;div&gt;Spin&lt;\\\/div&gt;\\n\"}]}},\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableCheckButton\":true,\"showSolutionsRequiresInput\":true,\"singlePoint\":false,\"applyPenalties\":true,\"enableScoreExplanation\":true,\"dropZoneHighlighting\":\"dragging\",\"autoAlignSpacing\":2,\"enableFullScreen\":false,\"showScorePoints\":true,\"showTitle\":true},\"grabbablePrefix\":\"Grabbable {num} of {total}.\",\"grabbableSuffix\":\"Placed in dropzone {num}.\",\"dropzonePrefix\":\"Dropzone {num} of {total}.\",\"noDropzone\":\"No dropzone.\",\"tipLabel\":\"Show tip.\",\"tipAvailable\":\"Tip available\",\"correctAnswer\":\"Correct answer\",\"wrongAnswer\":\"Wrong answer\",\"feedbackHeader\":\"Feedback\",\"scoreBarLabel\":\"You got :num out of :total points\",\"scoreExplanationButtonLabel\":\"Show score explanation\",\"localize\":{\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit fullscreen\"}}",
                    "slug": "labeling-golf-ball-principles-of-physics",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 17774,
                "playlist_id": 1,
                "title": "abc",
                "type": "h5p",
                "content": "test",
                "shared": false,
                "order": null,
                "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png",
                "subject_id": "Mathematics",
                "education_level_id": null,
                "h5p_content": {
                    "id": 19334,
                    "created_at": "2020-08-30T20:09:56.000000Z",
                    "updated_at": "2020-08-30T20:09:56.000000Z",
                    "user_id": 1,
                    "title": "Latest",
                    "library_id": 98,
                    "parameters": "{\"l10n\":{\"recordAnswer\":\"Record\",\"pause\":\"Pause\",\"continue\":\"Continue\",\"download\":\"Download\",\"done\":\"Done\",\"retry\":\"Retry\",\"microphoneNotSupported\":\"Microphone not supported. Make sure you are using a browser that allows microphone recording.\",\"microphoneInaccessible\":\"Microphone is not accessible. Make sure that the browser microphone is enabled.\",\"insecureNotAllowed\":\"Access to microphone is not allowed in your browser since this page is not served using HTTPS. Please contact the author, and ask him to make this available using HTTPS\",\"statusReadyToRecord\":\"Press a button below to record your answer.\",\"statusRecording\":\"Recording...\",\"statusPaused\":\"Recording paused. Press a button to continue recording.\",\"statusFinishedRecording\":\"You have successfully recorded your answer! Listen to the recording below.\",\"downloadRecording\":\"Download this recording or retry.\",\"retryDialogHeaderText\":\"Retry recording?\",\"retryDialogBodyText\":\"By pressing \\\"Retry\\\" you will lose your current recording.\",\"retryDialogConfirmText\":\"Retry\",\"retryDialogCancelText\":\"Cancel\",\"statusCantCreateTheAudioFile\":\"Can't create the audio file.\"}}",
                    "filtered": "",
                    "slug": "latest",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": "2020-08-30T20:22:47.000000Z",
                "updated_at": "2020-08-30T20:22:47.000000Z"
            },
            {
                "id": 17776,
                "playlist_id": 1,
                "title": "abc",
                "type": "h5p",
                "content": "test",
                "shared": false,
                "order": null,
                "thumb_url": "\/storage\/uploads_tmp\/DrV6rZ6ZDXFMT1k51gbOqw04rqguq6CMtiiD1nDH.png",
                "subject_id": "Mathematics",
                "education_level_id": null,
                "h5p_content": {
                    "id": 19334,
                    "created_at": "2020-08-30T20:09:56.000000Z",
                    "updated_at": "2020-08-30T20:09:56.000000Z",
                    "user_id": 1,
                    "title": "Latest",
                    "library_id": 98,
                    "parameters": "{\"l10n\":{\"recordAnswer\":\"Record\",\"pause\":\"Pause\",\"continue\":\"Continue\",\"download\":\"Download\",\"done\":\"Done\",\"retry\":\"Retry\",\"microphoneNotSupported\":\"Microphone not supported. Make sure you are using a browser that allows microphone recording.\",\"microphoneInaccessible\":\"Microphone is not accessible. Make sure that the browser microphone is enabled.\",\"insecureNotAllowed\":\"Access to microphone is not allowed in your browser since this page is not served using HTTPS. Please contact the author, and ask him to make this available using HTTPS\",\"statusReadyToRecord\":\"Press a button below to record your answer.\",\"statusRecording\":\"Recording...\",\"statusPaused\":\"Recording paused. Press a button to continue recording.\",\"statusFinishedRecording\":\"You have successfully recorded your answer! Listen to the recording below.\",\"downloadRecording\":\"Download this recording or retry.\",\"retryDialogHeaderText\":\"Retry recording?\",\"retryDialogBodyText\":\"By pressing \\\"Retry\\\" you will lose your current recording.\",\"retryDialogConfirmText\":\"Retry\",\"retryDialogCancelText\":\"Cancel\",\"statusCantCreateTheAudioFile\":\"Can't create the audio file.\"}}",
                    "filtered": "",
                    "slug": "latest",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": "2020-08-30T20:24:29.000000Z",
                "updated_at": "2020-08-30T20:24:29.000000Z"
            },
            {
                "id": 3,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 1,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 61,
                    "created_at": "2020-04-30T20:35:30.000000Z",
                    "updated_at": "2020-04-30T20:35:30.000000Z",
                    "user_id": 1,
                    "title": "Physics Vocabulary Study Guide",
                    "library_id": 63,
                    "parameters": "{\"panels\":[{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;Acceleration is the measurement of the change &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;span style=\\\"font-size:11.0pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;in an object\\u2019s velocity. &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"97578055-d386-46be-afe3-c19eae4108aa\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Acceleration\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Acceleration\"}},\"title\":\"Acceleration\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;The faster the air moves, the less pressure it exerts.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"0ce32fbf-4ff1-465b-9c50-8876c5fef34d\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Bernoulli\\u2019s Principle\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Bernoulli\\u2019s Principle\"}},\"title\":\"Bernoulli\\u2019s Principle\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;A vector is a quantity that has both a magnitude and a direction.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"cead752e-0c29-4acb-b9ae-2f61a3cd5c9b\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Vector\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Vector\"}},\"title\":\"Vector\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:&amp;quot;Calibri&amp;quot;,sans-serif\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;Drag is the force that acts opposite to the direction of motion. Drag is caused by friction and differences in air pressure.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"6ae4b819-276d-405e-b085-e894c31484d3\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Drag\"}},\"title\":\"Drag\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:normal\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;&lt;span style=\\\"font-size:10.5pt\\\"&gt;&lt;span style=\\\"color:black\\\"&gt;A turbulent flow is one in which the particles have irregular, fluctuating motions and erratic paths.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"f9f63fdd-0a8a-4259-a3f1-ca7271b51727\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Turbulent airflow\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Turbulent airflow\"}},\"title\":\"Turbulent airflow\"},{\"content\":{\"params\":{\"text\":\"&lt;p style=\\\"margin-bottom:10px\\\"&gt;&lt;span style=\\\"font-size:11pt\\\"&gt;&lt;span style=\\\"line-height:107%\\\"&gt;&lt;span style=\\\"font-family:Calibri,sans-serif\\\"&gt;Friction is the resistance of motion when one object rubs against another. It is a force and is measured in newtons.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"236c832f-f754-47d6-8d2c-1311a354d861\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Friction\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Friction\"}},\"title\":\"Friction\"}],\"hTag\":\"h2\"}",
                    "filtered": "{\"panels\":[{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Acceleration is the measurement of the change &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;in an object\\u2019s velocity. &lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"97578055-d386-46be-afe3-c19eae4108aa\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Acceleration\"}},\"title\":\"Acceleration\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;The faster the air moves, the less pressure it exerts.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"0ce32fbf-4ff1-465b-9c50-8876c5fef34d\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Bernoulli\\u2019s Principle\"}},\"title\":\"Bernoulli\\u2019s Principle\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;A vector is a quantity that has both a magnitude and a direction.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"cead752e-0c29-4acb-b9ae-2f61a3cd5c9b\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Vector\"}},\"title\":\"Vector\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Drag is the force that acts opposite to the direction of motion. Drag is caused by friction and differences in air pressure.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"6ae4b819-276d-405e-b085-e894c31484d3\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Drag\"}},\"title\":\"Drag\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;A turbulent flow is one in which the particles have irregular, fluctuating motions and erratic paths.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"f9f63fdd-0a8a-4259-a3f1-ca7271b51727\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Turbulent airflow\"}},\"title\":\"Turbulent airflow\"},{\"content\":{\"params\":{\"text\":\"&lt;p&gt;&lt;span&gt;&lt;span&gt;&lt;span&gt;Friction is the resistance of motion when one object rubs against another. It is a force and is measured in newtons.&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/span&gt;&lt;\\\/p&gt;\\n\"},\"library\":\"H5P.AdvancedText 1.1\",\"subContentId\":\"236c832f-f754-47d6-8d2c-1311a354d861\",\"metadata\":{\"contentType\":\"Text\",\"license\":\"U\",\"title\":\"Friction\"}},\"title\":\"Friction\"}],\"hTag\":\"h2\"}",
                    "slug": "physics-vocabulary-study-guide",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 1,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 2,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 59,
                    "created_at": "2020-04-30T20:24:58.000000Z",
                    "updated_at": "2020-04-30T20:24:58.000000Z",
                    "user_id": 1,
                    "title": "Science of Golf: Why Balls Have Dimples",
                    "library_id": 40,
                    "parameters": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"},\"aspectRatio\":\"16:9\"}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"bookmarks\":[],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "filtered": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/youtu.be\\\/fcjaxC-e8oY\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":58.33,\"to\":68.33},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"133bca3d-cfe9-442d-a887-8bf1e2ce682a\",\"question\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;They reduce wind resistance.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They make the ball more visually interesting.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;They grip the putting green better than a smooth ball.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"ac029b43-7225-49ed-a2d7-8656037748e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Why do golf balls have dimples?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Why do golf balls have dimples?&lt;\\\/p&gt;\\n\"},{\"x\":45.96541786743516,\"y\":42.78350515463918,\"width\":10,\"height\":10,\"duration\":{\"from\":132.969,\"to\":142.969},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"308503f3-8d41-4f4f-b016-587bcce3dfac\",\"question\":\"&lt;p&gt;A smooth ball will have a detached airflow, which causes what?&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;A low pressure zone, which is what causes drag.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball has no spin.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;The ball travels higher, but for a shorter distance.&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"f70c849d-9542-4f30-9116-8b60b7da708d\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Smooth Ball?\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"&lt;p&gt;Smooth Ball&lt;\\\/p&gt;\\n\"}],\"endscreens\":[{\"time\":295,\"label\":\"4:55 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"8e2cf84f-4557-4f79-a03e-526838498a7d\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"8d5527ef-3601-4ad9-9e63-2782c9775173\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":false,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "slug": "science-of-golf-why-balls-have-dimples",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 3,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 60,
                    "created_at": "2020-04-30T20:31:11.000000Z",
                    "updated_at": "2020-04-30T20:31:11.000000Z",
                    "user_id": 1,
                    "title": "Physics and Golf Balls",
                    "library_id": 60,
                    "parameters": "{\"cards\":[{\"text\":\"Is the measurement of the change in an object\\u2019s velocity called Speed or Acceleration?\",\"answer\":\"Acceleration\",\"image\":{\"path\":\"images\\\/image-5eab35098aaf0.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Dimples reduce wind resistance or aerodynamic drag. Does that make the ball go farther or faster?\",\"answer\":\"Farther\",\"image\":{\"path\":\"images\\\/image-5eab355f7ca78.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Do dimples on a ball increase or decrease the lift?\",\"answer\":\"Increase\",\"image\":{\"path\":\"images\\\/image-5eab3589be9e3.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":634,\"height\":508},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"See if you can remember what you learned!\"}",
                    "filtered": "{\"cards\":[{\"text\":\"Is the measurement of the change in an object\\u2019s velocity called Speed or Acceleration?\",\"answer\":\"Acceleration\",\"image\":{\"path\":\"images\\\/image-5eab35098aaf0.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Dimples reduce wind resistance or aerodynamic drag. Does that make the ball go farther or faster?\",\"answer\":\"Farther\",\"image\":{\"path\":\"images\\\/image-5eab355f7ca78.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1280,\"height\":720},\"tip\":\"\"},{\"text\":\"Do dimples on a ball increase or decrease the lift?\",\"answer\":\"Increase\",\"image\":{\"path\":\"images\\\/image-5eab3589be9e3.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":634,\"height\":508},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"See if you can remember what you learned!\"}",
                    "slug": "physics-and-golf-balls",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 6,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 4,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 75,
                    "created_at": "2020-05-01T04:51:11.000000Z",
                    "updated_at": "2020-05-01T04:51:11.000000Z",
                    "user_id": 1,
                    "title": "Understanding Gear Effect | Equipment and Tech | 18Birdies",
                    "library_id": 40,
                    "parameters": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/www.youtube.com\\\/watch?v=FdH0JQL5E-U&amp;list=PLVIShUJLAj0rWw3Yr3VtFGH4IbIVMfQFo\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"},\"aspectRatio\":\"16:9\"}]},\"assets\":{\"interactions\":[{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":52,\"to\":52},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"c9f0c83d-2ba2-4810-843a-1ee7bec2076f\",\"question\":\"&lt;p&gt;\\\"Torque\\\"&amp;nbsp;is&amp;nbsp;a property of golf&amp;nbsp;shafts that describes how much the shaft is&amp;nbsp;prone to twisting during the golf&amp;nbsp;swing.&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;True&lt;\\\/p&gt;\\n\",\"&lt;p&gt;False&lt;\\\/p&gt;\\n\"]},{\"subContentId\":\"81f2e02c-0f04-44a3-922c-4eac61a11acb\",\"question\":\"&lt;p&gt;... A shaft with a _____ torque&amp;nbsp;rating means&amp;nbsp;the shaft better resists twisting; a shaft with a ____ torque&amp;nbsp;rating means&amp;nbsp;the shaft is&amp;nbsp;more prone to twisting (all other things being equal).&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;lower,&amp;nbsp;higher&lt;\\\/p&gt;\\n\",\"&lt;p&gt;higher, lower&lt;\\\/p&gt;\\n\",\"&lt;p&gt;sharper, duller&lt;\\\/p&gt;\\n\",\"&lt;p&gt;straigher, curved&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"eadebb1e-891e-4ff3-8676-943c2616a9e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Untitled Single Choice Set\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Single Choice Set\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":24.314,\"to\":34.314},\"libraryTitle\":\"Statements\",\"action\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"7bce98af-5267-4ca6-a08c-0c8f2bef5afb\",\"summary\":[\"Gear effect is the term used to explain how and why hitting the ball off-center changes the ball flight.\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to adjust the pressure on the clubhead.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to ride your bike to the course.&lt;\\\/p&gt;\\n\"],\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"3b954191-ad43-452c-95c3-868047eb55be\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"}},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":145.688,\"to\":155.688},\"libraryTitle\":\"Multiple Choice\",\"action\":{\"library\":\"H5P.MultiChoice 1.14\",\"params\":{\"media\":{\"type\":{\"params\":{}},\"disableImageZooming\":false},\"answers\":[{\"correct\":true,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the right, causing a fade&amp;nbsp;\\\/ slice curved flight.&lt;\\\/div&gt;\\n\"},{\"correct\":false,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the left, causing a &lt;strong&gt;slice&lt;\\\/strong&gt; curved flight.&lt;\\\/div&gt;\\n\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableSolutionsButton\":true,\"enableCheckButton\":true,\"type\":\"auto\",\"singlePoint\":false,\"randomAnswers\":true,\"showSolutionsRequiresInput\":true,\"confirmCheckDialog\":false,\"confirmRetryDialog\":false,\"autoCheck\":false,\"passPercentage\":100,\"showScorePoints\":true},\"UI\":{\"checkAnswerButton\":\"Check\",\"showSolutionButton\":\"Show solution\",\"tryAgainButton\":\"Retry\",\"tipsLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"tipAvailable\":\"Tip available\",\"feedbackAvailable\":\"Feedback available\",\"readFeedback\":\"Read feedback\",\"wrongAnswer\":\"Wrong answer\",\"correctAnswer\":\"Correct answer\",\"shouldCheck\":\"Should have been checked\",\"shouldNotCheck\":\"Should not have been checked\",\"noInput\":\"Please answer before viewing the solution\"},\"confirmCheck\":{\"header\":\"Finish ?\",\"body\":\"Are you sure you wish to finish ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Finish\"},\"confirmRetry\":{\"header\":\"Retry ?\",\"body\":\"Are you sure you wish to retry ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Confirm\"},\"question\":\"&lt;p&gt;When a ball is spinning&amp;nbsp;in a clockwise&amp;nbsp;direction, there is high pressure on the left hand side of the ball, and low pressure on the right.&lt;\\\/p&gt;\\n\"},\"subContentId\":\"df5e99b0-6513-4aa9-a760-e3d9e2bfefe9\",\"metadata\":{\"contentType\":\"Multiple Choice\",\"license\":\"U\",\"title\":\"Untitled Multiple Choice\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Multiple Choice\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"}],\"bookmarks\":[],\"endscreens\":[{\"time\":358,\"label\":\"5:58 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"64506cb8-ea40-4c72-8c98-ed0bb3c3b808\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"b8eb5a4d-5e2e-4b74-95f5-ca37d1a45186\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\",\"authors\":[],\"changes\":[],\"extraTitle\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":true,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false,\"startVideoAt\":37},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "filtered": "{\"interactiveVideo\":{\"video\":{\"startScreenOptions\":{\"title\":\"Interactive Video\",\"hideStartTitle\":false},\"textTracks\":{\"videoTrack\":[{\"label\":\"Subtitles\",\"kind\":\"subtitles\",\"srcLang\":\"en\"}]},\"files\":[{\"path\":\"https:\\\/\\\/www.youtube.com\\\/watch?v=FdH0JQL5E-U&amp;amp;list=PLVIShUJLAj0rWw3Yr3VtFGH4IbIVMfQFo\",\"mime\":\"video\\\/YouTube\",\"copyright\":{\"license\":\"U\"}}]},\"assets\":{\"interactions\":[{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":52,\"to\":52},\"libraryTitle\":\"Single Choice Set\",\"action\":{\"library\":\"H5P.SingleChoiceSet 1.11\",\"params\":{\"choices\":[{\"subContentId\":\"c9f0c83d-2ba2-4810-843a-1ee7bec2076f\",\"question\":\"&lt;p&gt;\\\"Torque\\\"&amp;nbsp;is&amp;nbsp;a property of golf&amp;nbsp;shafts that describes how much the shaft is&amp;nbsp;prone to twisting during the golf&amp;nbsp;swing.&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;True&lt;\\\/p&gt;\\n\",\"&lt;p&gt;False&lt;\\\/p&gt;\\n\"]},{\"subContentId\":\"81f2e02c-0f04-44a3-922c-4eac61a11acb\",\"question\":\"&lt;p&gt;... A shaft with a _____ torque&amp;nbsp;rating means&amp;nbsp;the shaft better resists twisting; a shaft with a ____ torque&amp;nbsp;rating means&amp;nbsp;the shaft is&amp;nbsp;more prone to twisting (all other things being equal).&lt;\\\/p&gt;\\n\",\"answers\":[\"&lt;p&gt;lower,&amp;nbsp;higher&lt;\\\/p&gt;\\n\",\"&lt;p&gt;higher, lower&lt;\\\/p&gt;\\n\",\"&lt;p&gt;sharper, duller&lt;\\\/p&gt;\\n\",\"&lt;p&gt;straigher, curved&lt;\\\/p&gt;\\n\"]}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"autoContinue\":true,\"timeoutCorrect\":2000,\"timeoutWrong\":3000,\"soundEffectsEnabled\":true,\"enableRetry\":true,\"enableSolutionsButton\":true,\"passPercentage\":100},\"l10n\":{\"nextButtonLabel\":\"Next question\",\"showSolutionButtonLabel\":\"Show solution\",\"retryButtonLabel\":\"Retry\",\"solutionViewTitle\":\"Solution list\",\"correctText\":\"Correct!\",\"incorrectText\":\"Incorrect!\",\"muteButtonLabel\":\"Mute feedback sound\",\"closeButtonLabel\":\"Close\",\"slideOfTotal\":\"Slide :num of :total\",\"scoreBarLabel\":\"You got :num out of :total points\",\"solutionListQuestionNumber\":\"Question :num\"}},\"subContentId\":\"eadebb1e-891e-4ff3-8676-943c2616a9e0\",\"metadata\":{\"contentType\":\"Single Choice Set\",\"license\":\"U\",\"title\":\"Untitled Single Choice Set\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":24.314,\"to\":34.314},\"libraryTitle\":\"Statements\",\"action\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"7bce98af-5267-4ca6-a08c-0c8f2bef5afb\",\"summary\":[\"Gear effect is the term used to explain how and why hitting the ball off-center changes the ball flight.\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to adjust the pressure on the clubhead.&lt;\\\/p&gt;\\n\",\"&lt;p&gt;Gear effect is the term used to explain how and why it is imprtant to ride your bike to the course.&lt;\\\/p&gt;\\n\"],\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"3b954191-ad43-452c-95c3-868047eb55be\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"pause\":false,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"}},\"label\":\"\"},{\"x\":46.87499999999999,\"y\":44.44444444444444,\"width\":10,\"height\":10,\"duration\":{\"from\":145.688,\"to\":155.688},\"libraryTitle\":\"Multiple Choice\",\"action\":{\"library\":\"H5P.MultiChoice 1.14\",\"params\":{\"media\":{\"disableImageZooming\":false},\"answers\":[{\"correct\":true,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the right, causing a fade&amp;nbsp;\\\/ slice curved flight.&lt;\\\/div&gt;\\n\"},{\"correct\":false,\"tipsAndFeedback\":{\"tip\":\"\",\"chosenFeedback\":\"\",\"notChosenFeedback\":\"\"},\"text\":\"&lt;div&gt;This pushes the ball to the left, causing a &lt;strong&gt;slice&lt;\\\/strong&gt; curved flight.&lt;\\\/div&gt;\\n\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"behaviour\":{\"enableRetry\":true,\"enableSolutionsButton\":true,\"enableCheckButton\":true,\"type\":\"auto\",\"singlePoint\":false,\"randomAnswers\":true,\"showSolutionsRequiresInput\":true,\"confirmCheckDialog\":false,\"confirmRetryDialog\":false,\"autoCheck\":false,\"passPercentage\":100,\"showScorePoints\":true},\"UI\":{\"checkAnswerButton\":\"Check\",\"showSolutionButton\":\"Show solution\",\"tryAgainButton\":\"Retry\",\"tipsLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"tipAvailable\":\"Tip available\",\"feedbackAvailable\":\"Feedback available\",\"readFeedback\":\"Read feedback\",\"wrongAnswer\":\"Wrong answer\",\"correctAnswer\":\"Correct answer\",\"shouldCheck\":\"Should have been checked\",\"shouldNotCheck\":\"Should not have been checked\",\"noInput\":\"Please answer before viewing the solution\"},\"confirmCheck\":{\"header\":\"Finish ?\",\"body\":\"Are you sure you wish to finish ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Finish\"},\"confirmRetry\":{\"header\":\"Retry ?\",\"body\":\"Are you sure you wish to retry ?\",\"cancelLabel\":\"Cancel\",\"confirmLabel\":\"Confirm\"},\"question\":\"&lt;p&gt;When a ball is spinning&amp;nbsp;in a clockwise&amp;nbsp;direction, there is high pressure on the left hand side of the ball, and low pressure on the right.&lt;\\\/p&gt;\\n\"},\"subContentId\":\"df5e99b0-6513-4aa9-a760-e3d9e2bfefe9\",\"metadata\":{\"contentType\":\"Multiple Choice\",\"license\":\"U\",\"title\":\"Untitled Multiple Choice\"}},\"pause\":true,\"displayType\":\"button\",\"buttonOnMobile\":false,\"adaptivity\":{\"correct\":{\"allowOptOut\":false,\"message\":\"\"},\"wrong\":{\"allowOptOut\":false,\"message\":\"\"},\"requireCompletion\":false},\"label\":\"\"}],\"endscreens\":[{\"time\":358,\"label\":\"5:58 Submit screen\"}]},\"summary\":{\"task\":{\"library\":\"H5P.Summary 1.10\",\"params\":{\"intro\":\"Choose the correct statement.\",\"summaries\":[{\"subContentId\":\"64506cb8-ea40-4c72-8c98-ed0bb3c3b808\",\"tip\":\"\"}],\"overallFeedback\":[{\"from\":0,\"to\":100}],\"solvedLabel\":\"Progress:\",\"scoreLabel\":\"Wrong answers:\",\"resultLabel\":\"Your result\",\"labelCorrect\":\"Correct.\",\"labelIncorrect\":\"Incorrect! Please try again.\",\"alternativeIncorrectLabel\":\"Incorrect\",\"labelCorrectAnswers\":\"Correct answers.\",\"tipButtonLabel\":\"Show tip\",\"scoreBarLabel\":\"You got :num out of :total points\",\"progressText\":\"Progress :num of :total\"},\"subContentId\":\"b8eb5a4d-5e2e-4b74-95f5-ca37d1a45186\",\"metadata\":{\"contentType\":\"Summary\",\"license\":\"U\",\"title\":\"Untitled Summary\"}},\"displayAt\":3}},\"override\":{\"autoplay\":true,\"loop\":false,\"showBookmarksmenuOnLoad\":false,\"showRewind10\":false,\"preventSkipping\":false,\"deactivateSound\":false,\"startVideoAt\":37},\"l10n\":{\"interaction\":\"Interaction\",\"play\":\"Play\",\"pause\":\"Pause\",\"mute\":\"Mute\",\"unmute\":\"Unmute\",\"quality\":\"Video Quality\",\"captions\":\"Captions\",\"close\":\"Close\",\"fullscreen\":\"Fullscreen\",\"exitFullscreen\":\"Exit Fullscreen\",\"summary\":\"Open summary dialog\",\"bookmarks\":\"Bookmarks\",\"endscreen\":\"Submit screen\",\"defaultAdaptivitySeekLabel\":\"Continue\",\"continueWithVideo\":\"Continue with video\",\"playbackRate\":\"Playback Rate\",\"rewind10\":\"Rewind 10 Seconds\",\"navDisabled\":\"Navigation is disabled\",\"sndDisabled\":\"Sound is disabled\",\"requiresCompletionWarning\":\"You need to answer all the questions correctly before continuing.\",\"back\":\"Back\",\"hours\":\"Hours\",\"minutes\":\"Minutes\",\"seconds\":\"Seconds\",\"currentTime\":\"Current time:\",\"totalTime\":\"Total time:\",\"singleInteractionAnnouncement\":\"Interaction appeared:\",\"multipleInteractionsAnnouncement\":\"Multiple interactions appeared.\",\"videoPausedAnnouncement\":\"Video is paused\",\"content\":\"Content\",\"answered\":\"@answered answered\",\"endcardTitle\":\"@answered Question(s) answered\",\"endcardInformation\":\"You have answered @answered questions, click below to submit your answers.\",\"endcardInformationNoAnswers\":\"You have not answered any questions.\",\"endcardInformationMustHaveAnswer\":\"You have to answer at least one question before you can submit your answers.\",\"endcardSubmitButton\":\"Submit Answers\",\"endcardSubmitMessage\":\"Your answers have been submitted!\",\"endcardTableRowAnswered\":\"Answered questions\",\"endcardTableRowScore\":\"Score\",\"endcardAnsweredScore\":\"answered\",\"endCardTableRowSummaryWithScore\":\"You got @score out of @total points for the @question that appeared after @minutes minutes and @seconds seconds.\",\"endCardTableRowSummaryWithoutScore\":\"You have answered the @question that appeared after @minutes minutes and @seconds seconds.\"}}",
                    "slug": "understanding-gear-effect-equipment-and-tech-18birdies",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 5,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 5,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 66,
                    "created_at": "2020-04-30T23:58:44.000000Z",
                    "updated_at": "2020-04-30T23:58:44.000000Z",
                    "user_id": 1,
                    "title": "The Evolution of the Golf Ball",
                    "library_id": 61,
                    "parameters": "{\"timeline\":{\"defaultZoomLevel\":\"0\",\"height\":600,\"asset\":{},\"date\":[{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab648fb61c9.jpeg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":234,\"height\":216}},\"startDate\":\"1400\",\"endDate\":\"2020\",\"headline\":\"Origins of Golf\",\"text\":\"&lt;p&gt;Golf is recorded in its first recognizable form in the Eastern Coast of Scotland.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab64e26de00.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":222}},\"startDate\":\"1600\",\"headline\":\"Wood Golf Balls\",\"text\":\"&lt;p&gt;The first known golf ball was made out of wood, most likely beech, boxroot and similar hardwoods. Wooden clubs were the golf club of choice, which in conjunction with the wood balls would have made your friendly game of golf a rather jarring experience.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab652f19393.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1128,\"height\":1096}},\"startDate\":\"1618\",\"headline\":\"Feathery Golf Balls\",\"text\":\"&lt;p&gt;The first \\\"real\\\" golf ball was known as a \\\"feathery\\\"golf ball. Basically, the feathery was a leather sack filled with boiled goose feathers, then stitched up and painted. Feathery golf balls were expensive to make easily damaged and only the privileged few could afford to use them.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;It was made of cow or horsehide which was stuffed with feathers; most often goose feather. The leather, in order to be easier to work with, was soaked in water. The feathers that were forced into the ball by using a specially designed crutch-handled filling rod were soaked as well.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;After the ball was carefully hand sewn together, it was left to dry. While the leather shrank, the feathers expanded, which made the ball very hard and compact.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;Interestingly, the featherie also had excellent flight characteristics as it could reach a distance of up to 175 yards; although the longest recorded distance is more than 361 yards.&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab658fa6bde.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1350,\"height\":759},\"media\":\"https:\\\/\\\/images.app.goo.gl\\\/MFHFL1dtDiyR5nGq7\"},\"startDate\":\"1848\",\"headline\":\"Cost of Golf Balls\",\"text\":\"&lt;p&gt;In the mid-19th century, most people could only dream of playing golf. There were at the time fewer than 20 golf clubs around the world, with just three being outside Scotland. But that was not the only thing that prevented most people from playing golf. The high cost of golf essentials, especially of golf balls, made the game pretty much inaccessible to ordinary people.31 But that was soon about to change...&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab65cbe1adb.png#tmp\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":944,\"height\":890}},\"startDate\":\"1848\",\"endDate\":\"1890\",\"headline\":\"Gutty Golf Balls\",\"text\":\"&lt;p&gt;It wasn't until 1848 that Rev. Dr. Robert Adams began creating golf balls out of Gutta Percha \\\"Gutty\\\". The Gutty golf ball was created from the dried sap of the Sapodilla tree. It had a rubber-like feel and was formed into ball shapes by heating it up and shaping it while hot.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;The arrival of the gutta percha ball or \\\"gutty\\\", as it was called, revolutionized the game of golf and allowed its spread to the masses due to its affordability, playability and durability.&lt;\\\/p&gt;\\n\"},{\"asset\":{},\"startDate\":\"1899\",\"headline\":\"Hand Hammered Gutta Ball\",\"text\":\"&lt;p&gt;American businessman and inventor Coburn Haskell (1868-1922) got a (joint) patent from the United States Patent Office for the rubber-wound ball47 which would soon lead to another revolution in golf. Widely regarded as the first modern golf ball, Haskell\\u2019s ball was made of a solid rubber-wound core that was covered by guttapercha.&lt;\\\/p&gt;\\n\"}],\"language\":\"en\",\"headline\":\"The Evolution of the Golf Ball\",\"text\":\"&lt;div&gt;A golf ball is central to the game of golf. In fact, golf is all about the ball. Well, getting it into the hole in the ground!&lt;\\\/div&gt;\\n\",\"backgroundImage\":{\"path\":\"images\\\/backgroundImage-5eab633e2e935.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":2139,\"height\":1179}}}",
                    "filtered": "{\"timeline\":{\"defaultZoomLevel\":\"0\",\"height\":600,\"asset\":{},\"date\":[{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab648fb61c9.jpeg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":234,\"height\":216}},\"startDate\":\"1400\",\"endDate\":\"2020\",\"headline\":\"Origins of Golf\",\"text\":\"&lt;p&gt;Golf is recorded in its first recognizable form in the Eastern Coast of Scotland.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab64e26de00.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":222}},\"startDate\":\"1600\",\"headline\":\"Wood Golf Balls\",\"text\":\"&lt;p&gt;The first known golf ball was made out of wood, most likely beech, boxroot and similar hardwoods. Wooden clubs were the golf club of choice, which in conjunction with the wood balls would have made your friendly game of golf a rather jarring experience.&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab652f19393.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":1128,\"height\":1096}},\"startDate\":\"1618\",\"headline\":\"Feathery Golf Balls\",\"text\":\"&lt;p&gt;The first \\\"real\\\" golf ball was known as a \\\"feathery\\\"golf ball. Basically, the feathery was a leather sack filled with boiled goose feathers, then stitched up and painted. Feathery golf balls were expensive to make easily damaged and only the privileged few could afford to use them.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;It was made of cow or horsehide which was stuffed with feathers; most often goose feather. The leather, in order to be easier to work with, was soaked in water. The feathers that were forced into the ball by using a specially designed crutch-handled filling rod were soaked as well.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;After the ball was carefully hand sewn together, it was left to dry. While the leather shrank, the feathers expanded, which made the ball very hard and compact.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;Interestingly, the featherie also had excellent flight characteristics as it could reach a distance of up to 175 yards; although the longest recorded distance is more than 361 yards.&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab658fa6bde.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1350,\"height\":759},\"media\":\"https:\\\/\\\/images.app.goo.gl\\\/MFHFL1dtDiyR5nGq7\"},\"startDate\":\"1848\",\"headline\":\"Cost of Golf Balls\",\"text\":\"&lt;p&gt;In the mid-19th century, most people could only dream of playing golf. There were at the time fewer than 20 golf clubs around the world, with just three being outside Scotland. But that was not the only thing that prevented most people from playing golf. The high cost of golf essentials, especially of golf balls, made the game pretty much inaccessible to ordinary people.31 But that was soon about to change...&lt;br&gt;\\n&amp;nbsp;&lt;\\\/p&gt;\\n\"},{\"asset\":{\"thumbnail\":{\"path\":\"images\\\/thumbnail-5eab65cbe1adb.png\",\"mime\":\"image\\\/png\",\"copyright\":{\"license\":\"U\"},\"width\":944,\"height\":890}},\"startDate\":\"1848\",\"endDate\":\"1890\",\"headline\":\"Gutty Golf Balls\",\"text\":\"&lt;p&gt;It wasn't until 1848 that Rev. Dr. Robert Adams began creating golf balls out of Gutta Percha \\\"Gutty\\\". The Gutty golf ball was created from the dried sap of the Sapodilla tree. It had a rubber-like feel and was formed into ball shapes by heating it up and shaping it while hot.&amp;nbsp;&lt;\\\/p&gt;\\n\\n&lt;p&gt;The arrival of the gutta percha ball or \\\"gutty\\\", as it was called, revolutionized the game of golf and allowed its spread to the masses due to its affordability, playability and durability.&lt;\\\/p&gt;\\n\"},{\"asset\":{},\"startDate\":\"1899\",\"headline\":\"Hand Hammered Gutta Ball\",\"text\":\"&lt;p&gt;American businessman and inventor Coburn Haskell (1868-1922) got a (joint) patent from the United States Patent Office for the rubber-wound ball47 which would soon lead to another revolution in golf. Widely regarded as the first modern golf ball, Haskell\\u2019s ball was made of a solid rubber-wound core that was covered by guttapercha.&lt;\\\/p&gt;\\n\"}],\"language\":\"en\",\"headline\":\"The Evolution of the Golf Ball\",\"text\":\"&lt;div&gt;A golf ball is central to the game of golf. In fact, golf is all about the ball. Well, getting it into the hole in the ground!&lt;\\\/div&gt;\\n\",\"backgroundImage\":{\"path\":\"images\\\/backgroundImage-5eab633e2e935.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":2139,\"height\":1179}}}",
                    "slug": "the-evolution-of-the-golf-ball",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 7,
                "playlist_id": 1,
                "title": "",
                "type": "h5p",
                "content": "",
                "shared": false,
                "order": 6,
                "thumb_url": null,
                "subject_id": null,
                "education_level_id": null,
                "h5p_content": {
                    "id": 76,
                    "created_at": "2020-05-01T05:20:54.000000Z",
                    "updated_at": "2020-05-01T05:20:54.000000Z",
                    "user_id": 1,
                    "title": "Famous Golf Holes",
                    "library_id": 60,
                    "parameters": "{\"cards\":[{\"answer\":\"7th Hole at Pebble Beach\",\"image\":{\"path\":\"images\\\/image-5eabad2e71b62.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":991,\"height\":500},\"tip\":\"&lt;p&gt;Mickey Mantle&lt;br&gt;\\nAT&amp;amp;T Pro Am&lt;\\\/p&gt;\\n\"},{\"answer\":\"12th hole at Augusta National\",\"image\":{\"path\":\"images\\\/image-5eabae675c197.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":847,\"height\":467},\"tip\":\"\"},{\"answer\":\"7th hole at TPC Sawgrass\",\"image\":{\"path\":\"images\\\/image-5eabaec199254.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1024,\"height\":570},\"tip\":\"\"},{\"answer\":\"The Old Course at St Andrews,  #18\",\"image\":{\"path\":\"images\\\/image-5eabafb2400f7.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":367},\"tip\":\"\"},{\"answer\":\"Pine Valley Golf Club, #18\",\"image\":{\"path\":\"images\\\/image-5eabb0ced23c3.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":960,\"height\":640},\"tip\":\"\"},{\"answer\":\"Celebrity Course - Indian Wells Golf Resort, #14\",\"image\":{\"path\":\"images\\\/image-5eabb17c9a715.jpg#tmp\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":780,\"height\":490},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"Match the Hole with the Course\"}",
                    "filtered": "{\"cards\":[{\"answer\":\"7th Hole at Pebble Beach\",\"image\":{\"path\":\"images\\\/image-5eabad2e71b62.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":991,\"height\":500},\"tip\":\"&lt;p&gt;Mickey Mantle&lt;br&gt;\\nAT&amp;amp;T Pro Am&lt;\\\/p&gt;\\n\"},{\"answer\":\"12th hole at Augusta National\",\"image\":{\"path\":\"images\\\/image-5eabae675c197.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":847,\"height\":467},\"tip\":\"\"},{\"answer\":\"7th hole at TPC Sawgrass\",\"image\":{\"path\":\"images\\\/image-5eabaec199254.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":1024,\"height\":570},\"tip\":\"\"},{\"answer\":\"The Old Course at St Andrews,  #18\",\"image\":{\"path\":\"images\\\/image-5eabafb2400f7.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":475,\"height\":367},\"tip\":\"\"},{\"answer\":\"Pine Valley Golf Club, #18\",\"image\":{\"path\":\"images\\\/image-5eabb0ced23c3.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":960,\"height\":640},\"tip\":\"\"},{\"answer\":\"Celebrity Course - Indian Wells Golf Resort, #14\",\"image\":{\"path\":\"images\\\/image-5eabb17c9a715.jpg\",\"mime\":\"image\\\/jpeg\",\"copyright\":{\"license\":\"U\"},\"width\":780,\"height\":490},\"tip\":\"\"}],\"progressText\":\"Card @card of @total\",\"next\":\"Next\",\"previous\":\"Previous\",\"checkAnswerText\":\"Check\",\"showSolutionsRequiresInput\":true,\"defaultAnswerText\":\"Your answer\",\"correctAnswerText\":\"Correct\",\"incorrectAnswerText\":\"Incorrect\",\"showSolutionText\":\"Correct answer\",\"results\":\"Results\",\"ofCorrect\":\"@score of @total correct\",\"showResults\":\"Show results\",\"answerShortText\":\"A:\",\"retry\":\"Retry\",\"caseSensitive\":false,\"cardAnnouncement\":\"Incorrect answer. Correct answer was @answer\",\"pageAnnouncement\":\"Page @current of @total\",\"description\":\"Match the Hole with the Course\"}",
                    "slug": "famous-golf-holes",
                    "embed_type": "div",
                    "disable": 9,
                    "content_type": null,
                    "authors": null,
                    "source": null,
                    "year_from": null,
                    "year_to": null,
                    "license": "U",
                    "license_version": null,
                    "license_extras": null,
                    "author_comments": null,
                    "changes": null,
                    "default_language": null
                },
                "is_public": false,
                "created_at": null,
                "updated_at": null
            }
        ],
        "created_at": null,
        "updated_at": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/playlists/{playlist}/lti</code></p>
<!-- END_d918564ca41db24ba48fe607b56f9c4d -->
<!-- START_b455a0ec0acd6c04cdc310209814381d -->
<h2>Display error</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/error" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/error"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/error',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/error'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "errors": [
        "Unauthorized."
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/error</code></p>
<!-- END_b455a0ec0acd6c04cdc310209814381d -->
<!-- START_ce6b124894a429e5cdb7415c0d8a91fb -->
<h2>api/v1/admin/users</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/admin/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/admin/users</code></p>
<!-- END_ce6b124894a429e5cdb7415c0d8a91fb -->
<!-- START_521e32c7d2ba5e2282925ea8a26584bc -->
<h2>api/v1/admin/users</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/admin/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/users'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/admin/users</code></p>
<!-- END_521e32c7d2ba5e2282925ea8a26584bc -->
<!-- START_94825c2e47125a4d0f803043488d992e -->
<h2>api/v1/admin/users/{user}/edit</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/admin/users/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/users/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/admin/users/{user}/edit</code></p>
<!-- END_94825c2e47125a4d0f803043488d992e -->
<!-- START_4bfaf4c2bfaf88b96536e717be6b0e62 -->
<h2>api/v1/admin/users/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/v1/admin/users/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/users/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/v1/admin/users/{user}</code></p>
<p><code>PATCH api/v1/admin/users/{user}</code></p>
<!-- END_4bfaf4c2bfaf88b96536e717be6b0e62 -->
<!-- START_ff019bc7db8f5be9ac8699027d67f85c -->
<h2>api/v1/admin/users/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/v1/admin/users/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/users/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/admin/users/{user}</code></p>
<!-- END_ff019bc7db8f5be9ac8699027d67f85c -->
<!-- START_fc2a4353e3093252e672968599713345 -->
<h2>api/v1/admin/projects</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/v1/admin/projects',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/projects'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/admin/projects</code></p>
<!-- END_fc2a4353e3093252e672968599713345 -->
<!-- START_94e456091f258b9d03ee0bd9bfcc6f8d -->
<h2>api/v1/admin/projects/indexes/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/admin/projects/indexes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/admin/projects/indexes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/v1/admin/projects/indexes/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/api/v1/admin/projects/indexes/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/admin/projects/indexes/{id}</code></p>
<!-- END_94e456091f258b9d03ee0bd9bfcc6f8d -->
<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
<h2>Invoke the controller method.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost:8000/'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET /</code></p>
<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                              </div>
                </div>
    </div>
  </body>
</html>