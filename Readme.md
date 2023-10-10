# Requirements and answers
Remember: Task is to create a straightforward solution

## Have a CLI command for data import from a local CSV file or a file from a remote location, depending on the URL provided by the user.
I would use Symfony Console component for this. But I have 15 minutes left when writing this :)

## Implement CLI commands for CRUD (Create, Read, Update, Delete) operations on products.
I would like to find some library for doing this kind of operations.
Also I'm not sure if CLI is the best way to maintain products.
I think in this case I would like to create find some kind of library which will be aware of fields used in model.
and there will be no need to update commands when model changes.

For example it will read the model (and types) straight from Database.
On based on some schema for doctrine, or something which describe and is Single Source of Truth for the model.

## Implement CRUD endpoints (API) for product management using REST and JSON. Apply pagination and the ability to filter products on collection endpoints.
For CRUD API I would not use REST and JSON.
This is a use case for using some GRAPHQL implementation,
or SOAP stuff.

## Emit events in JSON format to a RabbitMQ queue when adding a new product, updating an existing one, or deleting a product.
I would use Symfony Messenger to do that, providing only id's or snapshots of the moments when event occurred.

## Develop unit and integration tests for the solution. 
There are two approaches.
- Let's bulletproof as much as possible. 
  - This means, that I would like to have unit tests for every class, and integration tests for every use case.
  - This is the best approach for code written when we have matured business model
  - it takes time.
  - You will need to think about different edge cases
- Use logging, metrics, and monitoring to find out what is going on.
  - This is better approach for code written when we are still learning about the domain.
  - It is faster to write. (no tests to write/maintain)
  - It is easier to change. (no tests to change)
  - time to market is shorter.

And because task is speaking about straightforward solution my solution for CSV import will be rather simple, so no unit tests, only logging.
When another case will appear I will be able to make decision about how I want approach my next decisions.

## Create API documentation in the OAS (Swagger) format using the NelmioApiDocBundle library.
There is no need for the documentation if REST approach was used properly.
And there is no need for the documentation if other strict standard was used, like GraphQL

## Prepare a development environment using docker-compose.
done.