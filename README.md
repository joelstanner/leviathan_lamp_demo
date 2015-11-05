LEVIATHAN SECURITY GROUP ANSIBLE DEMO

Before running a playbook, you'll need to create a "secrets.yml" file with the following line:

`DB_PASSWORD: <your super secure MySQL database password>`

To run a playbook:

`$ ansible-playbook -i plugins/inventory/ provision_ec2_lamp.yml`

The following environment variables must be set:
`AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY`

You must have an AWS account.

Install boto and ansible and aws-cli.
