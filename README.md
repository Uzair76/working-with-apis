<h1 align="center">
    <img src="https://readme-typing-svg.herokuapp.com/?font=Righteous&size=35&center=true&vCenter=true&width=500&height=70&duration=4000&lines=Welcome+to+My+API+Project!+🚀;+Powered+by+Laravel+11!" />
</h1>

---

<h2 id="introduction--setup-laravel-api-project">✨ Topics Covered</h2>

1. [Project Overview](#project-overview)  
2. [Authentication APIs](#authentication-apis)  
3. [CRUD APIs](#crud-apis)  
4. [Using Macros for Consistent Responses](#using-macros-for-consistent-responses)  
5. [API Resources for Structuring Data](#api-resources-for-structuring-data)  

---

<h2 id="project-overview">📋 Project Overview</h2>

This project is built with **Laravel 11** and implements a robust API system, including:
- Authentication APIs (Register, Login, Logout, Password Reset)
- CRUD APIs for managing entities
- Use of **Macros** for unified success and error responses
- **API Resources** for transforming data into structured formats

---

<h2 id="authentication-apis">🔑 Authentication APIs</h2>

The following Auth APIs are implemented:
1. **Registration API**  
   - Endpoint: `POST /api/register`  
   - Purpose: Register new users.  
   - Request Body:  
     ```json
     {
       "name": "John Doe",
       "email": "john.doe@example.com",
       "password": "password",
       "password_confirmation": "password"
     }
     ```
2. **Login API**  
   - Endpoint: `POST /api/login`  
   - Purpose: Authenticate and retrieve a token.  
   - Response Example:  
     ```json
     {
       "success": true,
       "message": "Login successful",
       "token": "your-auth-token"
     }
     ```
3. **Password Reset API**  
   - Reset Link Generation: `POST /api/password/reset`  
   - Password Update: `POST /api/password/update`

---

<h2 id="crud-apis">📦 CRUD APIs</h2>

CRUD operations are implemented for managing resources such as `Posts`, `Products`, or `Users`.  
Example:
- **Create:** `POST /api/posts`  
- **Read:** `GET /api/posts/{id}`  
- **Update:** `PUT /api/posts/{id}`  
- **Delete:** `DELETE /api/posts/{id}`  

---

<h2 id="using-macros-for-consistent-responses">✨ Using Macros for Consistent Responses</h2>

Custom macros are used to reduce redundancy and maintain consistent responses:
1. **Success Macro:**  
   ```php
   Response::macro('success', function ($data, $message = 'Operation successful') {
       return response()->json([
           'success' => true,
           'message' => $message,
           'data' => $data,
       ]);
   });
