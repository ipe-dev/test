<?xml version="1.0"encoding="UTF-8"?>

<!DOCTYPE struts PUBLIC
"-//Apache Software Foundation//DTD Struts Configuration 2.3//EN"
"http://struts.apache.org/dtds/struts-2.3.dtd">
<struts>
<constant name="struts.devMode"value="true"/>
<package name="com.internousdev.login.action"extends="struts-default">
<action name="LoginAction"class="com.internousdev.login.action.LoginAction"method="execute">
<result name="success">loginSuccess.jsp</result>
<result name="error">loginError.jsp</result>
</action>

</package>
</struts>