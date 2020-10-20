# Pagination
All top-level API resources support bulk retrievals through API "list" methods. For example, you can list users, customers, properties, and reservations. These List API methods group together a common structure, taking at least these two parameters: limit and page.

# Asynchronous routes

Some API routes are asynchronous. This means that the final state when creating or modifying a record is not in the response body. To know the final status, you must query the record via the HTTP GET method and read the 'status' field. By default it is set to PENDING, which means that the process has not yet been committed. At the end of processing, the "status" field takes the value SUCCESS or FAILURE.

To find out if a route is asynchronous, you must read the async field (true or false) in the body of the response.

All top-level API resources support the 'status' filter using the SUCCESS, PENDING and/or FAILURE parameters.
