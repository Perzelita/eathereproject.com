#!/bin/bash

 <?php
USERNAME=Perzelita
PASSWORD=47e1d7
FROM=0000
TO=0807464246
MESSAGE=Test
curl -q "http://www.thsms.com/api/rest?method=send&username=$USERNAME&password=$PASSWORD&from=$FROM&to=$TO&message=$MESSAGE
