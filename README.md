# Repro

See https://github.com/ory/sdk/issues/224

## Output

```
repro-ory-sdk-224-repro-1  | POST http://hydra:4445/admin/clients
repro-ory-sdk-224-repro-1  | {}
repro-ory-sdk-224-repro-1  | 
repro-ory-sdk-224-repro-1  | GET http://hydra:4445/admin/clients/af60e02b-f5a2-47c0-ba79-23d1937b8dfd
repro-ory-sdk-224-repro-1  | 
repro-ory-sdk-224-repro-1  | 
repro-ory-sdk-224-repro-1  | PUT http://hydra:4445/admin/clients/af60e02b-f5a2-47c0-ba79-23d1937b8dfd
repro-ory-sdk-224-repro-1  | {"allowed_cors_origins":[],"audience":[],"client_id":"af60e02b-f5a2-47c0-ba79-23d1937b8dfd","client_name":"","client_secret_expires_at":0,"client_uri":"","contacts":[],"created_at":"2022-11-09T01:00:36+00:00","grant_types":[],"jwks":[],"logo_uri":"","metadata":[],"owner":"","policy_uri":"","redirect_uris":[],"response_types":[],"scope":"offline_access offline openid","subject_type":"public","token_endpoint_auth_method":"client_secret_basic","tos_uri":"","updated_at":"2022-11-09T01:00:35+00:00","userinfo_signed_response_alg":"none"}
repro-ory-sdk-224-repro-1  | 
repro-ory-sdk-224-repro-1  | 
repro-ory-sdk-224-repro-1  | Fatal error: Uncaught Ory\Client\ApiException: [400] Client error: `PUT http://hydra:4445/admin/clients/af60e02b-f5a2-47c0-ba79-23d1937b8dfd` resulted in a `400 Bad Request` response:
repro-ory-sdk-224-repro-1  | {"error":"The request was malformed or contained invalid parameters","error_description":"Unable to decode the request b (truncated...)
repro-ory-sdk-224-repro-1  |  in /app/vendor/ory/client/lib/Api/V0alpha2Api.php:12969
repro-ory-sdk-224-repro-1  | Stack trace:
repro-ory-sdk-224-repro-1  | #0 /app/vendor/ory/client/lib/Api/V0alpha2Api.php(12944): Ory\Client\Api\V0alpha2Api->adminUpdateOAuth2ClientWithHttpInfo('af60e02b-f5a2-4...', Object(Ory\Client\Model\OAuth2Client))
repro-ory-sdk-224-repro-1  | #1 /app/repro.php(34): Ory\Client\Api\V0alpha2Api->adminUpdateOAuth2Client('af60e02b-f5a2-4...', Object(Ory\Client\Model\OAuth2Client))
repro-ory-sdk-224-repro-1  | #2 {main}
repro-ory-sdk-224-repro-1  |   thrown in /app/vendor/ory/client/lib/Api/V0alpha2Api.php on line 12969
```
