# Requirements and answers
Remember: The task is to create a straightforward solution

## Implement CLI commands for CRUD (Create, Read, Update, Delete) operations on products.
I would like to find a library for doing this kind of operation.
Also, I'm unsure if CLI is the best way to maintain products.
In this case, I want to create or find a library that will be aware of the fields used in the model.
And there will be no need to update commands when the model changes.

For example, it will read the model (and types) straight from the Database.
Is based on some schema for doctrine or something that describes and is a Single Source of Truth for the model.

## Implement CRUD endpoints (API) for product management using REST and JSON. Apply pagination and the ability to filter products on collection endpoints.
For CRUD API, I would not use REST and JSON.
This is a use case for using some GRAPHQL implementation,
or SOAP stuff.

## Emit events in JSON format to a RabbitMQ queue when adding a new product, updating an existing one, or deleting a product.
I would use Symfony Messenger to do that, providing only IDs or snapshots of the moments when an event occurred.

## Develop unit and integration tests for the solution.
There are two approaches.
- Let's bulletproof as much as possible.
  - This means I would like unit tests for every class and integration tests for every use case.
  - This is the best approach for code written when we have a matured business model
  - it takes time.
  - You will need to think about different edge cases
- Use logging, metrics, and monitoring to determine what is happening.
  - This is a better approach for code written when we are still learning about the domain.
  - It is faster to write. (no tests to write/maintain)
  - It is easier to change. (no tests to change)
  - time to market is shorter.

And because the task is speaking about a straightforward solution, my solution for CSV import will be rather simple, so no unit tests, only logging.
When another case appears, I can decide how I want to approach my following decisions.

## Create API documentation in the OAS (Swagger) format using the NelmioApiDocBundle library.
There is no need for documentation if the REST approach was correctly used.
And there is no need for the documentation if other strict standard was used, like GraphQL.

## Prepare a development environment using docker-compose.
done.

## Have a CLI command for data import from a local CSV file or a file from a remote location, depending on the URL provided by the user.
I would use the Symfony Console component for this. But I have 15 minutes left when writing this.

# Second thoughts

## ProductDTO in ProductManagement
Ont his phase of the project, where everything lives in monolith application, I'm able to easily update/change my model.
Currently it's 1 to 1 with date just from the CSV file. But when I will learn more about the domain, and wanted changes
i will be able to just modigy my code easily. There are no commands to maintain, events to "update", no stuff like this.
Changes are easy to made.